// Function to change color based on element width percentage
function changeColorBasedOnWidth() {
    const container = document.querySelector('.progress');
    const containerWidth = container.offsetWidth;

    const elements = document.querySelectorAll('.progress-bar');

    elements.forEach((element) => {
        // Get the width of the element and its container
        const elementWidth = element.offsetWidth;

        // Calculate the width percentage of the element relative to its container
        const widthPercentage = (elementWidth / containerWidth) * 100;

        // Change the color based on width percentage
        if (widthPercentage > 60) {
            element.style.backgroundColor = '#32a852';
        } else if (widthPercentage > 40){
            element.style.backgroundColor = '#cfc106';
        }else if (widthPercentage > 20){
            element.style.backgroundColor = '#db8f02';
        }else{
            element.style.backgroundColor = '#c92a02';
        }
    });
}

// Observe data changes (for seach results)
const config = {
    childList: true,
};

const callback = function(mutationsList, observer) {
    for (let mutation of mutationsList) {
        if (mutation.type === 'childList') {
            changeColorBasedOnWidth()
        }
    }
};

const results = document.querySelector('.results');
const observer = new MutationObserver(callback);
observer.observe(results, config);

window.addEventListener('load', changeColorBasedOnWidth);