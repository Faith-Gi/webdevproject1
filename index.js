const destinations = [
    {
        name: "Bali",
        location: "Indonesia",
        description: "Known for its stunning landscapes and rich culture.Price:$1200 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "April to October",
        images: ["images/bali data 1.jpg", "images/Bali main.jpg", "images/bali data 2.jpg"]
    },
    {
        name: "Paris",
        location: "France",
        description: "Known for its iconic landmarks and romantic atmosphere. Price:$1000 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "April to June, September to October",
        images: ["images/paris main.jpg", "images/paris data 1.jpg", "images/paris data 2.jpg"]
    },
    {
        name: "New York",
        location: "USA",
        description: "Famous for its skyline and vibrant culture. Price:$1500 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "April to June, September to November",
        images: ["images/new york data 1.jpg", "images/new york main.jpg", "images/new york data 3.jpg"]
    },
    {
        name: "Sydney",
        location: "Australia",
        description: "Famous for its Sydney Opera House. Price:$2000 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "September to November, March to May",
        images: ["images/sydney main.jpg", "images/sydney data 1.jpg", "images/sydney data 2.jpg"]
    },
    {
        name: "Tokyo",
        location: "Japan",
        description: "A city known for its blend of traditional and modern culture. Price:$800 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "March to May, September to November",
        images: ["images/tokyo data 1.jpg", "images/tokyo main.jpg", "images/tokyo data 2.jpg"]
    },
    {
        name: "Rome",
        location: "Italy",
        description: "Famous for its ancient history and stunning architecture. Price:$600 Travel Options:Flight, Hotel, Guided Tours",
        bestTime: "April to June, September to October",
        images: ["images/rome main.jpg", "images/rome data 1.jpg", "images/rome data 2.jpg"],
    },
];

   
const destinationGallery = document.getElementById('destinationGallery');
const adminTable = document.getElementById('adminTable');

// Function to load destinations to the gallery
function loadDestinations() {
    destinationGallery.innerHTML = '';
    destinations.forEach((destination, index) => {
        const card = document.createElement('div');
        card.className = 'destination-card';
        card.innerHTML = `
            <img src="${destination.images[0]}" alt="${destination.name}">
            <div class="destination-details">
                <h3>${destination.name}</h3>
                <p>${destination.description}</p>
                <button class="button" onclick="viewDetails(${index})">View Details</button>
                <div class="details" id="details-${index}">
                    <h4>Details</h4>
                    <p><strong>Location:</strong> ${destination.location}</p>
                    <p><strong>Best Time to Visit:</strong> ${destination.bestTime}</p>
                    <div>
                        ${destination.images.map((img) => `<img src="${img}" alt="${destination.name}" style="width: 100%; height: auto; margin: 5px;">`).join('')}
                    </div>
                </div>
            </div>
        `;
        destinationGallery.appendChild(card);
    });
}

// Function to toggle details view
function viewDetails(index) {
    const details = document.getElementById(`details-${index}`);
    details.style.display = details.style.display === 'block' ? 'none' : 'block';
}

// Function to open the login modal
function openLoginModal() {
    document.getElementById('loginModal').style.display = 'block';
}

// Function to close modals
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Function to log in (placeholder functionality)
function login() {
    alert('Login functionality is not implemented yet!');
    closeModal('loginModal');
}

// Function to open the admin dashboard
function openAdminDashboard() {
    document.getElementById('adminDashboard').style.display = 'block';
    loadAdminDestinations();
}

// Function to load destinations in admin table
function loadAdminDestinations() {
    adminTable.innerHTML = `
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    `;
    destinations.forEach((destination, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${destination.name}</td>
            <td>${destination.description}</td>
            <td>
                <button class="button" onclick="editDestination(${index})">Edit</button>
                <button class="button" onclick="deleteDestination(${index})">Delete</button>
            </td>
        `;
        adminTable.appendChild(row);
    });
}

// Function to open modal for adding new destination
function openAddDestinationModal() {
    document.getElementById('addDestinationModal').style.display = 'block';
}

// Function to add new destination
function addDestination() {
    const name = document.getElementById('newName').value;
    const location = document.getElementById('newLocation').value;
    const description = document.getElementById('newDescription').value;
    const bestTime = document.getElementById('newBestTime').value;
    const images = Array.from(document.getElementById('newImages').files).map(file => URL.createObjectURL(file));

    destinations.push({ name, location, description, bestTime, images });
    loadDestinations();
    loadAdminDestinations();
    closeModal('addDestinationModal');
}

// Function to edit a destination (placeholder functionality)
function editDestination(index) {
    alert('Edit functionality is not implemented yet!');
}

// Function to delete a destination
function deleteDestination(index) {
    if (confirm('Are you sure you want to delete this destination?')) {
        destinations.splice(index, 1);
        loadDestinations();
        loadAdminDestinations();
    }
}

// Load destinations on initial page load
loadDestinations();



