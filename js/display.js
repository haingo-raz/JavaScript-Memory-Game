document.addEventListener('DOMContentLoaded', () => {
    // Suffle function
    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    // Shuffle and append cards for a given container
    function shuffleCards(containerClass) {
        const cardContainer = document.querySelector(containerClass);
        if (cardContainer) {
            const cards = Array.from(cardContainer.children);
            const shuffledCards = shuffle(cards);
            shuffledCards.forEach(card => cardContainer.appendChild(card));
        }
    }

    // Shuffle cards for the easy, medium and difficult levels
    shuffleCards('.easy-card-container');
    shuffleCards('.med-card-container');
    shuffleCards('.diff-card-container');
});