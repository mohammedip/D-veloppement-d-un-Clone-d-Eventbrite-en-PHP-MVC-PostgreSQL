
import axios from 'axios'; // Importing axios

// Create an instance of axios with custom configuration
const apiClient = axios.create({
    baseURL: '/',  // Set your backend's base URL here, or leave it as '/' if it's the same as your front-end
    headers: {
        'Content-Type': 'application/json'
    }
});

// Function to make GET requests
function getRequest(url) {
    return apiClient.get(url)
        .then(response => response.data)
        .catch(error => {
            console.error(`GET ${url} failed:`, error);
            return null;
        });
}

// Function to make POST requests
function postRequest(url, data) {
    return apiClient.post(url, data)
        .then(response => response.data)
        .catch(error => {
            console.error(`POST ${url} failed:`, error);
            return { success: false, error: 'Request failed' };
        });
}

// Export functions so they can be used in other JS files
export { getRequest, postRequest };
