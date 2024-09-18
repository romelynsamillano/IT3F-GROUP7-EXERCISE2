document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.btn-readmore').forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault(); 
            console.log(`Navigating to: ${button.href}`);
            window.location.href = button.href;
        });
    });

    document.querySelectorAll('.team-member img').forEach(img => {
        img.addEventListener('mouseover', () => {
            img.style.transform = 'scale(1.1)';
            img.style.transition = 'transform 0.3s ease';
        });

        img.addEventListener('mouseout', () => {
            img.style.transform = 'scale(1)';
        });
    });

    document.querySelectorAll('.team-member').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.backgroundColor = '#eaeaea';
            card.style.boxShadow = '0 8px 12px rgba(0, 0, 0, 0.2)';
        });

        card.addEventListener('mouseout', () => {
            card.style.backgroundColor = 'white';
            card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        });

        card.addEventListener('mouseover', () => {
            tooltip.style.opacity = '1';
        });

        card.addEventListener('mouseout', () => {
            tooltip.style.opacity = '0';
        });
    });
});
