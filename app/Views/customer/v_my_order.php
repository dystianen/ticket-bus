<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<h3 class="mb-4">Your Order</h3>
<!-- Tabs for status -->
<ul class="nav nav-tabs" id="order-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-status="under-packaging" href="#">Under packaging</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-status="waiting-for-courier" href="#">Waiting for courier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-status="sent" href="#">Sent</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-status="finished" href="#">Finished</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-status="cancelled" href="#">Cancelled</a>
  </li>
</ul>

<!-- Content container -->
<div id="order-content" class="mt-3"></div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('#order-tabs .nav-link');
    const contentContainer = document.getElementById('order-content');

    // Function to fetch orders based on status
    async function fetchOrders(status) {
      try {
        const response = await fetch(`<?= base_url() ?>/${status}`);
        if (!response.ok) throw new Error('Failed to fetch data.');

        const data = await response.json();
        renderOrders(data, status); // Render orders with status context
      } catch (error) {
        console.error('Error fetching orders:', error);
        contentContainer.innerHTML = '<p class="text-danger">Failed to load orders.</p>';
      }
    }

    // Function to render orders dynamically
    function renderOrders(orders, status) {
      if (orders.length === 0) {
        contentContainer.innerHTML = '<p>No orders found.</p>';
        return;
      }

      contentContainer.innerHTML = ''; // Clear previous content
      orders.forEach(order => {
        const buttonHtml = getButtonHtml(order.cart_id, status); // Get dynamic button HTML

        const orderCard = `
        <div class="d-flex justify-content-between p-3 mb-3 rounded-4" style="border: 1px solid lightgray">
          <div class="d-flex align-content-center gap-3 w-75">
            <!-- Product Image -->
            <img src="${order.file_path}" width="100px" alt="${order.product_name}">
            <!-- Product Details -->
            <div class="d-flex flex-column">
              <h5>${order.product_name}</h5>
              <span>Size: ${order.size_name}</span>
              <span>Price: Rp ${parseInt(order.price).toLocaleString('id-ID')}</span>
            </div>
          </div>
          <!-- Action Button -->
          <div class="mt-3">
            ${buttonHtml}
          </div>
        </div>
      `;
        contentContainer.innerHTML += orderCard; // Append each order
      });
    }

    // Function to generate buttons based on status
    function getButtonHtml(orderId, status) {
      if (status === 'under-packaging') {
        return `<button class="btn btn-danger rounded-pill px-4" onclick="cancelOrder(${orderId})">Cancel Order</button>`;
      }
      if (status === 'sent') {
        return `<button class="btn btn-primary rounded-pill px-4" onclick="finishOrder(${orderId})">Finish It</button>`;
      }
      return ''; // No buttons for other statuses
    }

    // Handle Cancel Order
    window.cancelOrder = async function(orderId) { // Make the function globally accessible
      if (!confirm('Are you sure you want to cancel this order?')) return;

      try {
        const response = await fetch(`<?= base_url() ?>cancel-order/${orderId}`, {
          method: 'POST',
        });
        if (!response.ok) throw new Error('Failed to cancel order.');

        alert('Order canceled successfully.');
        fetchOrders('under-packaging'); // Refresh data
      } catch (error) {
        console.error('Error canceling order:', error);
        alert('Failed to cancel order.');
      }
    }

    // Handle Finish Order
    window.finishOrder = async function(orderId) { // Make the function globally accessible
      if (!confirm('Are you sure you want to finish this order?')) return;

      try {
        const response = await fetch(`<?= base_url() ?>finish-order/${orderId}`, {
          method: 'POST',
        });
        if (!response.ok) throw new Error('Failed to finish order.');

        alert('Order marked as finished.');

        // After the order is finished, switch to the 'finished' tab
        const finishedTab = document.querySelector('#order-tabs .nav-link[data-status="finished"]');
        if (finishedTab) {
          tabs.forEach(t => t.classList.remove('active')); // Remove active class from all tabs
          finishedTab.classList.add('active'); // Set active class on the 'finished' tab
          fetchOrders('finished'); // Fetch orders for the 'finished' status
        }

      } catch (error) {
        console.error('Error finishing order:', error);
        alert('Failed to finish order.');
      }
    }



    // Handle tab clicks
    tabs.forEach(tab => {
      tab.addEventListener('click', (e) => {
        e.preventDefault();
        tabs.forEach(t => t.classList.remove('active')); // Remove active class from all tabs
        tab.classList.add('active'); // Set active class on clicked tab

        const status = tab.getAttribute('data-status');
        fetchOrders(status); // Fetch orders for selected status
      });
    });

    // Load the first tab by default
    fetchOrders('under-packaging');
  });
</script>
<?= $this->endSection() ?>