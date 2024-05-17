document.addEventListener('DOMContentLoaded', function () {
    // Get the explore button and packages container
    const exploreBtn = document.getElementById('exploreBtn');
    const packagesContainer = document.getElementById('packagesContainer');

    // Array of packages with room types, food & beverages, and extra things
    const packages = [
        {
            name: 'Family Package of Kashmir',
            price: '₹50000',
            duration: '5 days',
            roomTypes: ['Deluxe Suite', 'Ocean View Room'],
            foodBeverages: ['Breakfast Buffet', 'Lunch at Top Restaurants'],
            extraThings: ['Private City Tour', 'Spa & Wellness Package']
        },
        {
            name: 'Friends Package of Kashmir',
            price: '₹30000',
            duration: '7 days',
            roomTypes: ['Family Suite', 'Connecting Rooms'],
            foodBeverages: ['Family Dinner Special', 'Kids Meal Plan'],
            extraThings: ['Theme Park Tickets', 'Camel Riding Experience']
        },
        {
            name: 'Single Package of Kashmir',
            price: '₹10000',
            duration: '4 days',
            roomTypes: ['Standard Room', 'Adventurer Tent'],
            foodBeverages: ['Adventure Meal Plan', 'BBQ Night'],
            extraThings: ['Desert Safari', 'Skydiving Experience']
        }
    ];

    // Function to display packages
    function displayPackages() {
        packagesContainer.innerHTML = ''; // Clear previous content
        packages.forEach(package => {
            const packageDiv = document.createElement('div');
            packageDiv.classList.add('package');
            packageDiv.innerHTML = `
                <h3><center><u>${package.name}</u></center></h3>
                <p><strong>Price:</strong> ${package.price}</p>
                <p><strong>Duration:</strong> ${package.duration}</p>
                <p><strong>Room Types:</strong> ${package.roomTypes.join(', ')}</p>
                <p><strong>Food & Beverages:</strong> ${package.foodBeverages.join(', ')}</p>
                <p><strong>Extra Things:</strong> ${package.extraThings.join(', ')}</p>
                <button class="bookBtn">Book Now</button> <!-- Added booking button -->
            `;
            packagesContainer.appendChild(packageDiv);
        });
        packagesContainer.style.display = 'block'; // Show the packages container
    }

    // Event listener for the explore button
    exploreBtn.addEventListener('click', displayPackages);
});
