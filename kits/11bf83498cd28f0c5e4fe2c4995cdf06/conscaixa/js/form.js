$('input[name="birthday"]').mask('00/00/0000');
$('input[name="cpf"]').mask('000.000.000-00');
$('input[name="cell"]').mask('(00)0000-00000');
var name_value = document.getElementById("name_input");
var birthDate = document.getElementById("birthday_input");
var cpf = document.getElementById("cpf_input");
var email = document.getElementById("email_input");
var phone = document.getElementById("phone_input");
var addDependent = document.querySelector('.hero .add-dependent');
var forYouButton = document.querySelector("#for-you");
var forFamilyButton = document.querySelector('#for-family');

var forIdadeButton = document.querySelector('#idadestoshow');
var forEmpresaButton = document.querySelector('#idadestoshow');

var familySection = document.querySelector('.hero .family'); 
var infoIcon = document.querySelector('.hero .icon'); 
var infosContainer = document.querySelector('.hero .infos');
var closeButton = document.querySelector('.hero .infos .close-button');
var typeForm = "you";

function IntegrationForm() {
    var validate = valideForm();

    if(validate) {
        var headers = new Headers();
        headers.append("Content-Type", "application/json");

        if(dependents_valid[0] && typeForm == "family") {
            dependents_valid.forEach(getDependents);
            dependentsJson = 'dependants: [' + dependentJson + '],';
        } 

        var newBirthDate = formateDate(birthDate.value);
        var phoneForm = phone.value;
        phoneForm = phoneForm.replaceAll("(", "");
        phoneForm = phoneForm.replaceAll(")", "");
        phoneForm = phoneForm.replaceAll("-", "");

        var query = `{
            SimulatePrices (data: {
                owner: {
                    birthDate: "` + newBirthDate + `"
                    cpf: "` + cpf.value + `"
                    email: "` + email.value + `"
                    interested: true
                    name: "` + name_value.value + `"
                    phone: "` + phoneForm + `"
                },` + dependentsJson + `
                classEntityId: "NENHUM", 
                analyticsCookieDataLayer: 
                "` + JSON.stringify(window.dataLayer).replaceAll("\"","\'") + `"
                }) {
                owner { 
                    individualCost, 
                    individualCostWithDiscount 
                } 
                dependants {individualCost, individualCostWithDiscount}  planType { 
                    name 
                    id 
                    closed 
                } 
                    totalPrice 
                    totalPriceWithDiscount 
                }
        }`;

        console.log(query)

        var settings = {
            "url": "https://az-appapidkreu-eu2-prd01.azurewebsites.net/app/graphql",
            "method": "POST",
            "timeout": 0,
            "headers": {
            "Content-Type": "application/json"
            },
            "data": JSON.stringify({
            query: query,
            variables: {}
            })
        };

        $.ajax(settings).done(function (response) {
            dataLayer.push({
                'event': "gaEvent",
                'eventAction': "envio:planos:simulacao:sucesso",
                'eventCategory': "landing:planos",
                'eventLabel': "Para mim",
                'eventValue': 0
            });

            if(response.data) {
                response.data.SimulatePrices.forEach(setData);
                $(".plans-carousel").addClass("active");
            }
        });
    }
}

var name_valid = true;
var phone_valid = true;
var email_valid = true;
var cpf_valid = true;
var birthDate_valid = true;

name_value.onblur = () => {
    if(name_value.value == "") {
        name_value.classList.add('invalid');
        if(name_valid) {
            $( "<p class='input-error' id='input_error_name_value'>Nome Inválido</p>" ).insertAfter(name_value);
            name_valid = false;
        }
    } else {
        name_value.classList.remove('invalid');
        if(!name_valid) {
            $( "#input_error_name_value" ).remove();
            name_valid = true;
        }
    }
}



email.onblur = () => {
    if(!email.value.match(/^([\w-]\.?)+@([\w-]+\.)+([A-Za-z]{2,4})+$/)) {
        email.classList.add('invalid');
        if(email_valid) {
            $( "<p class='input-error' id='input_error_email'>E-mail Inválido</p>" ).insertAfter(email);
            email_valid = false;
        }
    } else {
        email.classList.remove('invalid');
        if(!email_valid) {
            $( "#input_error_email" ).remove();
            email_valid = true;
        }
    }
}




$(document).on('click', '#remove_active', function() {
    $('.dependents').toggleClass("remove");
});

var dependents = [];
var dependents_valid = [];

addDependent.onclick = () => {
    var dependentNumber = dependents.length+1;
    var dependentInput = $('<div class="dependent dependent_' + dependentNumber + '"><p>Dependente ' + dependentNumber + '</p><label for=""><input required type="text" placeholder="Data de nascimento" id="dependent_' + dependentNumber + '" name="dependent_' + dependentNumber + '" class="input"><svg stroke="currentColor" id="dependent_svg_' + dependentNumber + '" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" font-size="24px" color="#5595df" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(255, 94, 172); margin-left: 10px; cursor: pointer;"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></label><div class="removeWrapper"><p>Deseja Excluir o <strong>Dependente ' + dependentNumber + '</strong>?</p><div class="buttons"><button id="no_remove_dependent_' + dependentNumber + '">Não</button><button id="remove_dependent_' + dependentNumber + '">Sim</button></div></div></div>')
    dependents.push(dependentInput);
    dependents_valid.push(true);
    $(".hero .dependents").append(dependentInput);
    $('#dependent_' + dependentNumber).mask('00/00/0000');
    addEvent(dependentNumber);
}

function addEvent(dependentNumber) {
    $(document).on('blur', ('#dependent_' + dependentNumber), function() {
        var dependent = $('#dependent_' + dependentNumber)[0];
        if(!dependent.value.match(/^(?=\d{2}([-.,\/])\d{2}\1\d{4}$)(?:0[1-9]|1\d|[2][0-8]|29(?!.02.(?!(?!(?:[02468][1-35-79]|[13579][0-13-57-9])00)\d{2}(?:[02468][048]|[13579][26])))|30(?!.02)|31(?=.(?:0[13578]|10|12))).(?:0[1-9]|1[012]).\d{4}$/)) {
            dependent.classList.add('invalid');
            if(dependents_valid[dependentNumber - 1]) {
                $( "<p class='input-error' id='input_error_dependent_" + dependentNumber + "'>Data Inválida</p>" ).insertAfter(dependent);
                dependents_valid[dependentNumber - 1] = false;
            }
        } else {
            dependent.classList.remove('invalid');
            if(!dependents_valid[dependentNumber - 1]) {
                $( "#input_error_dependent_" + dependentNumber ).remove();
                dependents_valid[dependentNumber - 1] = true;
            }
        }
    });

    $(document).on('click', ('#dependent_svg_' + dependentNumber), function() {
        $('.dependent_' + dependentNumber).addClass("remove");
    });

    $(document).on('click', ('#remove_dependent_' + dependentNumber), function() {
        dependents.splice((dependentNumber-1), 1);
        dependents_valid.splice((dependentNumber-1), 1);
        $('.dependent_' + dependentNumber).remove();
        dependents.forEach(logArrayElements);
    })

    $(document).on('click', ('#no_remove_dependent_' + dependentNumber), function() {
        $('.dependent_' + dependentNumber).removeClass("remove");
    })
}

function logArrayElements(element, index, array) {
    element.attr('class', 'dependent dependent_' + (index+1));
    element.children('p').text("Dependente " + (index+1));
    var labelChildren = element.children('label');
    var removeChildren = element.children('.removeWrapper');
    labelChildren.children('input').attr("name", "dependent_" + (index+1));
    labelChildren.children('input').attr("id", "dependent_" + (index+1));
    labelChildren.children('svg').attr("id", "dependent_svg_" + (index+1));
    removeChildren.children('p').children("strong").text("Dependente " + (index+1));
    removeChildren.children('.buttons').children("button:first-child").attr("id", "no_remove_dependent_" + (index+1));
    removeChildren.children('.buttons').children("button:last-child").attr("id", "remove_dependent_" + (index+1));
}

forFamilyButton.onclick = () => {
    forFamilyButton.classList.add("active");
    forYouButton.classList.remove("active");
    familySection.classList.add("active");
    $("#idadestoshow").show();
    typeForm = "family";
    $("#campoindicacao").val("AUTOMOVEL");




}

forYouButton.onclick = () => {
    forYouButton.classList.add("active");
    forFamilyButton.classList.remove("active");
    familySection.classList.remove("active");
    $("#idadestoshow").show();
    typeForm = "you";
    $("#campoindicacao").val("IMOVEL");
}

function valideForm() {
    if(name_valid && phone_valid && email_valid && cpf_valid && birthDate_valid) {
        return true;
    } else {
        return false
    }
}

$(document).ready(() => {
    $('.plans-carousel .carousel').slick({
      dots: false,
      infinite: false,
      variableWidth: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      centerPadding: '40px',
      responsive: [
        {
          breakpoint: 1399,
          settings: {
            dots: true,
            arrow: false,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            dots: true,
            arrow: false,
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
    ]
    });
});

function testPhone(strPhone) {
    strPhone = strPhone.replaceAll("(", "");
    strPhone = strPhone.replaceAll(")", "");
    strPhone = strPhone.replaceAll("-", "");
    if (
        strPhone == "00000000000" ||
        strPhone == "11111111111" ||
        strPhone == "22222222222" ||
        strPhone == "33333333333" ||
        strPhone == "44444444444" ||
        strPhone == "55555555555" ||
        strPhone == "66666666666" ||
        strPhone == "77777777777" ||
        strPhone == "88888888888" ||
        strPhone == "99999999999" ||
        strPhone == "00000000000" ||
        strPhone == "1111111111" ||
        strPhone == "2222222222" ||
        strPhone == "3333333333" ||
        strPhone == "4444444444" ||
        strPhone == "5555555555" ||
        strPhone == "6666666666" ||
        strPhone == "7777777777" ||
        strPhone == "8888888888" ||
        strPhone == "9999999999"
    ) {
        return false
    }

    return true;
}

function testCPF(strCPF) {
    var sum;
    var rest;
    sum = 0;
    strCPF = strCPF.replaceAll(".", "");
    strCPF = strCPF.replaceAll("-", "");
    if (
        !strCPF ||
        strCPF.length != 11 ||
        strCPF == "00000000000" ||
        strCPF == "11111111111" ||
        strCPF == "22222222222" ||
        strCPF == "33333333333" ||
        strCPF == "44444444444" ||
        strCPF == "55555555555" ||
        strCPF == "66666666666" ||
        strCPF == "77777777777" ||
        strCPF == "88888888888" ||
        strCPF == "99999999999" 
    ) {
        return false
    }

  for (i=1; i<=9; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  rest = (sum * 10) % 11;

    if ((rest == 10) || (rest == 11))  rest = 0;
    if (rest != parseInt(strCPF.substring(9, 10)) ) return false;

    sum = 0;
    for (i = 1; i <= 10; i++) sum = sum + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    rest = (sum * 10) % 11;

    if ((rest == 10) || (rest == 11))  rest = 0;
    if (rest != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function formateDate(date) {
    var year = date.substr(date.length - 4);
    date = date.substr(0, date.length - 5);
    var mounth = date.substr(date.length - 2);
    date = date.substr(0, date.length - 3);
    var day = date.substr(date.length - 2);

    var newDate = year + '-' + mounth + '-' + day;
    
    return newDate;
}

var dependentJson = "";
function getDependents(element, index, array) {
    if(dependents_valid[index]) {
        date = document.getElementById("dependent_" + (index+1)).value;
        date = formateDate(date);

        if((index + 1)!== dependents.length) {
            dependentJson+= `{birthDate: "` + date + `"},`
        } else {
            dependentJson+= `{birthDate: "` + date + `"}`
        }
    }

    return dependentJson;
}

function setData(element, index, array) {
    var totalPrice = element.totalPrice.toString();
    totalPrice = totalPrice.replace(".", ",");
    var totalPriceWithDiscount = element.totalPriceWithDiscount.toString();
    totalPriceWithDiscount = totalPriceWithDiscount.replace(".", ",");
    
    switch(element.planType.id) {
        case "QCONFORTO":
            $("#qConforto").children('.full-valor').text("R$ " + totalPrice);
            $("#qConforto").children('.descont-valor').text("por R$ " + totalPriceWithDiscount);
        break;

        case "QCONFORTOPLUS":
            $("#qConfortoPlus").children('.full-valor').text("R$ " + totalPrice);
            $("#qConfortoPlus").children('.descont-valor').text("por R$ " + totalPriceWithDiscount);
        break;

        case "QDEMAIS":
            $("#qDmais").children('.full-valor').text("R$ " + totalPrice);
            $("#qDmais").children('.descont-valor').text("por R$ " + totalPriceWithDiscount);
        break;

        case "QTOP":
            $("#qTop").children('.full-valor').text("R$ " + totalPrice);
            $("#qTop").children('.descont-valor').text("por R$ " + totalPriceWithDiscount);
        break;

        case "REFIND":
            $("#qReferencia").children('.full-valor').text("R$ " + totalPrice);
            $("#qReferencia").children('.descont-valor').text("por R$ " + totalPriceWithDiscount);
        break;
    }
}

function verifyDate(date) {
    let year = date.substr(date.length - 4);
    year = parseInt(year);
    let actualYear = new Date();

    if((actualYear - year) < 18) {
        return true;
    }
    console.log(actualYear - year);
    return false;
}

function dobValidate(date) {

    var today = new Date();
    var nowyear = today.getFullYear();
    var nowmonth = today.getMonth();
    var nowday = today.getDate();

    var birth = new Date(date);

    var birthyear = birth.getFullYear();
    var birthmonth = birth.getMonth();
    var birthday = birth.getDate();

    var age = nowyear - birthyear;
    var age_month = nowmonth - birthmonth;
    var age_day = nowday - birthday;

    if ((age == 18 && age_month <= 0 && age_day <= 0) || age < 18) {
        return false;
    }

    return true;
}

infoIcon.onclick = () => {
    $(".hero .infos").toggleClass("open");
}

closeButton.onclick = () => {
    $(".hero .infos").toggleClass("open");
}
