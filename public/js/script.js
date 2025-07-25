// Oreilly Training | Laravel from Scratch | Chapter 5: Components and Styling
// DONE : Videos named: CH-05 Mobile Menu Toggle

document.querySelector('#burger').addEventListener('click', function () {
    const menu = document.querySelector('#mobile-menu');
    menu.classList.toggle('hidden');
});