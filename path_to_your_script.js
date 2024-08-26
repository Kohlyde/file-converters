// Function to output metadata to the page
function outputMetadata(message) {
    const metadataElement = document.createElement('p');
    metadataElement.textContent = message;
    document.body.appendChild(metadataElement);
}

try {
    // Function to generate random data dynamically
    function getRandomItem(array) {
        try {
            const item = array[Math.floor(Math.random() * array.length)];
            outputMetadata(`Selected item: ${JSON.stringify(item)}`);
            return item;
        } catch (error) {
            outputMetadata(`Error selecting item: ${error.message}`);
        }
    }

    function generateRandomData() {
        try {
            const userAgents = [
                {
                    userAgent: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36",
                    browser: "Chrome",
                    version: "130.0.0.0",
                    platform: "Windows",
                    osVersion: "10.0"
                },
                {
                    userAgent: "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15",
                    browser: "Safari",
                    version: "14.0.3",
                    platform: "Mac",
                    osVersion: "10.15.7"
                },
                // More user agents...
            ];

            const processors = [
                {
                    processor: "Intel Core i7-9700K",
                    cores: 8,
                    threads: 8,
                    baseClock: "3.6 GHz",
                    boostClock: "4.9 GHz"
                },
                {
                    processor: "AMD Ryzen 5 3600",
                    cores: 6,
                    threads: 12,
                    baseClock: "3.6 GHz",
                    boostClock: "4.2 GHz"
                },
                // More processors...
            ];

            const locations = [
                { latitude: 34.0522, longitude: -118.2437, city: "Los Angeles", region: "California", country: "United States" },
                { latitude: 40.7128, longitude: -74.0060, city: "New York", region: "New York", country: "United States" },
                // More locations...
            ];

            const proxies = [
                "129.226.193.16:3128",
                "189.240.60.168:9090",
                // More proxies...
            ];

            outputMetadata('Random data generated successfully.');
            return {
                userAgent: getRandomItem(userAgents),
                processor: getRandomItem(processors),
                location: getRandomItem(locations),
                proxy: getRandomItem(proxies)
            };
        } catch (error) {
            outputMetadata(`Error generating random data: ${error.message}`);
        }
    }

    // Function to spoof settings using dynamically generated data
    function spoofSettings() {
        try {
            outputMetadata('Spoofing settings...');

            const randomData = generateRandomData();

            const { userAgent, processor, location, proxy } = randomData;

            // Log spoofed settings
            outputMetadata(`Using Proxy: ${proxy}`);
            outputMetadata(`User Agent: ${userAgent.userAgent}`);
            outputMetadata(`Processor: ${processor.processor}`);
            outputMetadata(`Location: ${location.city}, ${location.region}, ${location.country}`);

            // Spoofing User Agent
            try {
                Object.defineProperty(navigator, 'userAgent', {
                    value: userAgent.userAgent,
                    writable: false
                });
                outputMetadata('User Agent spoofed successfully.');
            } catch (error) {
                outputMetadata(`Error spoofing User Agent: ${error.message}`);
            }

            // Display the spoofed data on the page
            document.getElementById("userAgent").innerText = `User Agent: ${userAgent.userAgent}`;
            document.getElementById("location").innerText = `Location: ${location.city}, ${location.region}, ${location.country}`;
            document.getElementById("ipAddress").innerText = `IP Address: ${proxy.split(":")[0]}`;

            // Display additional system info
            document.getElementById("processor").innerText = `Processor: ${processor.processor}`;
            document.getElementById("systemInfo").innerText = `Platform: ${userAgent.platform}, OS Version: ${userAgent.osVersion}, Browser: ${userAgent.browser}, Version: ${userAgent.version}`;
        } catch (error) {
            outputMetadata(`Error in spoofSettings: ${error.message}`);
        }
    }

    // Function to detect current settings from the outside world perspective
    function detectSettings() {
        try {
            // Fetch the actual IP Address detected from the outside
            fetch('https://api.ipify.org?format=json')
                .then(response => response.json())
                .then(data => {
                    document.getElementById("actualIpAddress").innerText = "Actual IP Address: " + data.ip;
                    outputMetadata('Actual IP Address detected successfully.');
                })
                .catch(error => {
                    outputMetadata(`Error fetching actual IP Address: ${error.message}`);
                });

            // Display the actual User Agent detected from the outside
            document.getElementById("actualUserAgent").innerText = "Actual User Agent: " + navigator.userAgent;
            outputMetadata('Actual User Agent detected successfully.');
        } catch (error) {
            outputMetadata(`Error in detectSettings: ${error.message}`);
        }
    }

    // Call spoofSettings and detectSettings functions on page load
    window.onload = function() {
        try {
            spoofSettings();
            detectSettings();
            outputMetadata('All functions executed successfully on page load.');
        } catch (error) {
            outputMetadata(`Error on window.onload: ${error.message}`);
        }
    };
} catch (error) {
    outputMetadata(`Global error in script: ${error.message}`);
}
