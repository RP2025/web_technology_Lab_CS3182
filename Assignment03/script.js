// JavaScript code in an external file (script.js)

// Function to generate dynamic content
function generateDynamicContent() {
    document.write("<h2>Dynamic Content</h2>");
    document.write("<p>This content is generated using the document.write() method in an external JavaScript file.</p>");
    document.write("<p>You can add more content here as needed.</p>");
}

// Event listener for the Print button
document.getElementById("printButton").addEventListener("click", function() {
    window.print();
});

// Call the function to generate dynamic content
generateDynamicContent();
