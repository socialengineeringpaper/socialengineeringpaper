const accordions = document.querySelectorAll('.faq-section .accordion')
accordions.forEach(accordion => {
    const button = accordion.querySelector('.button')
    
    button.addEventListener('click', () => {
        accordions.forEach(accord => {
            if (accord.classList.contains('active')) {
                accord.classList.remove('active')   
            }
        })

        accordion.classList.toggle('active')
    })

})
