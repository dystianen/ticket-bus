<div class="card p-4">
  <h5>Filters</h5>
  <hr>

  <div class="d-flex flex-column" id="brand-filters">
    <!-- Filters will be populated here dynamically -->
  </div>

  <!-- <button class="btn btn-primary rounded-pill mt-4">Apply Filter</button> -->
</div>

<script>
  // Function to handle the filter button click
  function handleClickFilter(brand) {
    window.location.replace(`?brand=${brand}`);
  }

  // Fetch brands dynamically from the server
  async function fetchBrands() {
    try {
      const response = await fetch('<?= base_url('brands') ?>');
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }

      const brands = await response.json();

      // Populate the filter buttons dynamically
      const brandFiltersContainer = document.getElementById('brand-filters');
      brandFiltersContainer.innerHTML = ''; // Clear previous content

      brands.forEach(brand => {
        // Create a new filter item for each brand
        const filterItem = document.createElement('div');
        filterItem.classList.add('d-flex', 'justify-content-between', 'align-items-center');

        const brandName = document.createElement('span');
        brandName.textContent = brand.brand_name; // Assuming brand name is stored in `name` field

        const filterButton = document.createElement('button');
        filterButton.classList.add('btn');
        filterButton.onclick = () => handleClickFilter(brand.brand_name); // Replace spaces with hyphens

        const icon = document.createElement('i');
        icon.setAttribute('data-feather', 'chevron-right');
        filterButton.appendChild(icon);

        filterItem.appendChild(brandName);
        filterItem.appendChild(filterButton);

        // Append the filter item to the container
        brandFiltersContainer.appendChild(filterItem);
      });

      // Re-initialize feather icons
      feather.replace();
    } catch (error) {
      console.error('Failed to fetch brands:', error);
    }
  }

  // Fetch brands on page load
  window.addEventListener('DOMContentLoaded', fetchBrands);
</script>