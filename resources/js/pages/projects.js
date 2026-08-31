function init() {
    console.log('projects.js loaded');
    filterProjects();
}

function filterProjects() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const projectArticles = document.querySelectorAll('article[data-category]');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            filterButtons.forEach(btn => {
                btn.classList.remove('bg-[#1A1A1A]', 'border-[#0055FF]', 'text-[#F5F5F5]');
                btn.classList.add('bg-transparent', 'border-[#2D2D2D]', 'text-[#A1A1AA]');
            });
            this.classList.remove('bg-transparent', 'border-[#2D2D2D]', 'text-[#A1A1AA]');
            this.classList.add('bg-[#1A1A1A]', 'border-[#0055FF]', 'text-[#F5F5F5]');

            projectArticles.forEach(article => {
                const categoryId = article.getAttribute('data-category');

                if (filterValue === 'all' || categoryId === filterValue) {
                    article.style.display = '';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    });
}

document.addEventListener('DOMContentLoaded', init);