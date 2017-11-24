function abrejanela() {
                document.getElementById("denescola").val;
                var modal = document.getElementById('myModal');

                var btn = document.getElementById("seguinte");

                var span = document.getElementsByClassName("close")[0];

                btn.onclick = function() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }
                
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }




            function null_or_empty(str) {
                var v = document.getElementById(str).value;
                return v == null || v == "";
            }

            function validaMatricula() {
                debugger;
                var alerta = 'Os seguintes campos não foram preenchidos:<br>';

                if (null_or_empty("nomealuno")) {

                    var alerta = document.getElementById("demo").innerHTML = '- Curso.';
                    alert(alerta);

                    return false;
                }
                return true;
            }

            $('input[type=text]').val(function() {
                return this.value.toUpperCase();
            });


            $(document).ready(function() {
                $("#datanasctoaluno").mask("99/99/9999");
                $("#telefonealuno").mask("(99) 99999-9999");
                $("#cpf").mask("999.999.999-99");
                $("#cepaluno").mask("99999-999");
                $("#dataemissaorg").mask("99/99/9999");
                $("#titulo").mask("9999 9999 9999");
                $("#dataemissaorg").mask("99/99/9999");
                $("#zonatitulo").mask("999");
                $("#secaotitulo").mask("9999");
                $("#telefoneparentescoavisoacidente").mask("(99) 99999-9999");


                //-------------------------SET DE DADOS PARA TESTE
                $("#codanac").val('262202');
                $("#nomealuno").val('EDUARDO LUCAS STRIEDER');
                $("#selecionacurso").val('1');
                $("#sexo").val('0');
                $("#cepaluno").val('98910-000');
                $("#enderecoresidencialaluno").val('RUA PLANALTO 1196');
                $("#bairroaluno").val('CENTRO');
                $("#cidadealuno").val('TRÊS DE MAIO');
                $("#ufaluno").val('RS');
                $("#telefonealuno").val('(55)99992-8413');
                $("#datanasctoaluno").val('06/09/1994');
                $("#estadocivil").val('1');
                $("#naturalidade").val('TRÊS DE MAIO');
                $("#nacionalidade").val('BRASILEIRO');
                $("#nomepai").val('ERNO JOSE STRIEDER');
                $("#nomemae").val('TÂNIA INES SCHIAVI');
                $("#ufaluno").val('RS');
                $("#email").val('STRIEDER.SETREM@GMAIL.COM');
                $("#rg").val('9109561879');
                $("#orgaoexpedicaorg").val('SSP/RS');
                $("#dataemissaorg").val('25/08/2007');
                   //-----------------------FIM DO SET DE DADOS PARA TESTE
                   
                   
                   
                $("#cpf").val('019.783.360-80');
                $("#reservista").val('10857744');
                $("#categoriareservista").val('DISPENSADO');
                $("#titulo").val('1044 2587 3365');
                $("#zonatitulo").val('025');
                $("#secaotitulo").val('004');
                $("#tiposangue").val('O');
                $("#tiposanguefator").val('+');
                $("#alergicomedicamento").val('NÃO');
                $("#nomeavisoacidente").val('ERNO JOSE STRIEDER');
                $("#grauparentescoavisoacidente").val('PAI');
                $("#enderecoparentescoavisoacidente").val('RUA PLANALTO, 1196');
                $("#telefoneparentescoavisoacidente").val('(55)99992-8413');


                $('#celular').focusout(function() {
                    var phone, element;
                    element = $(this);
                    element.unmask();
                    phone = element.val().replace(/\D/g, '');
                    if (phone.length > 10) {
                        element.mask("(99) 99999-999?9");
                    } else {
                        element.mask("(99) 9999-9999?9");
                    }
                }).trigger('focusout');



            });

            $(function() {
                $("#cepaluno").change(function() {
                    var cep = $('#cepaluno').val();
                    if (cep == '') {
                        alert('Informe o CEP antes de continuar');
                        $('#cep').focus();
                        return false;
                    }
                    $('#cepaluno').html('Aguarde...');
                    $.post('home/consulta',
                            {
                                cep: cep
                            },
                    function(dados) {

                        $('#enderecoresidencialaluno').val(dados.logradouro);
                        $('#bairroaluno').val(dados.bairro);
                        $('#cidadealuno').val(dados.localidade);
                        $('#ufaluno').val(dados.uf);
                        $('#btn_consulta').html('Consultar');

                        var endereco = document.getElementById("enderecoresidencialaluno").val;
                        var bairro = document.getElementById("bairroaluno").val;
                        if (endereco == null) {
                            document.getElementById("enderecoresidencialaluno").disabled = false;
                        }
                        if (bairro == null) {
                            document.getElementById("bairroaluno").disabled = false;
                        }
                    }, 'json');


                });
            });
