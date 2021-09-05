/**
 * This file is a part of add-on "[Telegram] BB Code - Media Post".
 *
 * Developed by CrazyHackGUT aka Kruzya.
 * (c) 2018-2021
 */

window.addEventListener('message', function(message)
{
    if (message.origin !== 'https://t.me') {
        return;
    }

    let iframes = [].slice.call(document.getElementsByTagName('iframe'))
        .filter(iframe => iframe.contentWindow === message.source);

    let data = JSON.parse(message.data);
    if (data.event !== 'resize') {
        return;
    }

    if (iframes.length < 1) {
        return;
    }

    iframes[0].style.height = data.height + 'px';
}, false);
