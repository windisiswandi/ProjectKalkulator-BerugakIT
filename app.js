const puppeteer = require("puppeteer");

async function scrape(url) {
  const browser = await puppeteer.launch({ headless: false });
  const page = await browser.newPage();
  await page.goto(url);
  await page.waitForSelector("span [title='Fatih']");
  const target = await page.$("span [title='Fatih']");
  await target.click();
  const inp = await page.$(
    "#main > footer > div._3SvgF._1mHgA.copyable-area > div.DuUXI > div > div._1awRl.copyable-text.selectable-text"
  );
  
  for (let i = 0; i < 200; i++) {
    await inp.type("Semangat fatih wkwkw😂😂😂");
    await page.keyboard.press("Enter");
  }
}

scrape("https://web.whatsapp.com");


// const { Client } = require('whatsapp-web.js');
// var qrcode = require('qrcode-terminal');
// const client = new Client();

// client.on('qr', (qr) => {
//     // Generate and scan this code with your phone
//     console.log('QR RECEIVED', qr);
//     qrcode.generate(qr);
// });

// client.on('ready', () => {
//     console.log('Client is ready!');
// });

// client.on('message', msg => {
//     if (msg.body == '!ping') {
//         msg.reply('Silahkan tinggal kan pesan, nanti di balas jika bos saya aktif di wa :)');
//     }
// });

// client.initialize();