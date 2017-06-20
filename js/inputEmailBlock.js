const inputMail = document.querySelector('#guest_mail');
const labelFor = document.querySelector('#leave_mail_block label');

function labelchangeZ() {
    labelFor.style.zIndex = '-1'
}

function checkLabel() {
    labelFor.style.zIndex = '2';
    if ( inputMail.value != '' ) {
        labelFor.style.opacity = '0';
        setTimeout(labelchangeZ, 200);
    } else {
        labelFor.style.opacity = '0.85';
    }
}

function labelZindex() {
    if (inputMail.value != '') {
        labelchangeZ();
    } else {
        setTimeout(labelchangeZ, 200);
    }
}