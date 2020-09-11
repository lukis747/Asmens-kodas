// $.ajax({
//     url: "/api/getWeather",
//     data: {
//         zipcode: 97201
//     },
//     success: function( result ) {
//         $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
//     }
// });

// $( "#getData" ).click(function() {
//     $.ajax({
//         url : "/validate",
//         method:"post",
//         data : {
//             _token: "{{ csrf_token() }}",
//             personalCode: $('personalCode').content
//         }
//     });
//
//     alert( "Handler for .click() called." );
// });

// $( "#getData" ).click(function() {
//     console.log();
// });
$("#getData").click(function(){
    personalCode = $('form').find('input[id="personalCode"]').val();
    if (personalCode.length == 11){
        $.post("/validate",
            {
                _token: $('form').find('input[name="_token"]').val(),
                personalCode: personalCode
            },
            function(data, status){
                console.log(data);
                $('#gender').val(data.personData.gender);
                $('#age').val(data.personData.age);
                $('#birthdate').val(data.personData.birthdate);
                $('#personalCodeCheckResult').val(data.personData.personalCodeCheckResult ? 'teisingas' : 'neteisingas');
                $('#personalCodeHasCorrectControlSum').val(data.personData.personalCodeHasCorrectControlSum? 'teisingas' : 'neteisingas');

                if (data.personData.personalCodeCheckResult)
                {
                    $('#submitForm').prop('disabled', false);
                }else{
                    $('#submitForm').prop('disabled', true);
                }
            });
    }else{
        alert("Įveskite 11 skaitemenų asmens kodą")
    }

});
