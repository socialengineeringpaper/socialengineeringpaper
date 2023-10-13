const accordionsKnow = document.querySelectorAll('.know .accordion')
accordionsKnow.forEach(accordion => {
    const button = accordion.querySelector('.button')
    
    button.addEventListener('click', () => {
        accordionsKnow.forEach(accord => {
            if (accord.classList.contains('active')) {
                accord.classList.remove('active')   
            }
        })

        accordion.classList.toggle('active')
    })

})


const overlay = document.querySelector('#youtubeOverlay')
const video = document.querySelector('#youtubeVideo')
const iframe = $('<iframe width="640" height="360" src="https://www.youtube.com/embed/8um7EOtRTPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')

overlay.addEventListener('click', () => {
    video.classList.add('show');
    $('.video-container').append(iframe)
})

video.addEventListener('click', () => {
    $('.video-container iframe').remove()
    video.classList.remove('show');
})
