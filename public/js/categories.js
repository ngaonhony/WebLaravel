// public/js/categories.js

document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-button');
    const categoryItems = document.querySelectorAll('.category-item');
  
    categoryButtons.forEach(button => {
      button.addEventListener('click', () => {
        const categoryId = button.dataset.category;
  
        categoryItems.forEach(item => {
          item.style.display = 'none';
        });
  
        const selectedCategory = document.querySelector(`.category-item[data-category="${categoryId}"]`);
        selectedCategory.style.display = 'block';
      });
    });
  });