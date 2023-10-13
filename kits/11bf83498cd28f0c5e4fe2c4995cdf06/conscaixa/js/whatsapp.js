const whatsappButtons = document.querySelectorAll('a.whatsapp')
whatsappButtons.forEach(button => {
    
    button.addEventListener('click', () => {
        dataLayer.push({
            'event': "gaEvent",
            'eventCategory': "landing:botao-flutuante",
            'eventAction': "clique:whatsapp-icone",
            'eventLabel': "",
            'eventValue': 0
        });
    })

})
