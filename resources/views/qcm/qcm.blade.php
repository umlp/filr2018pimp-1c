@extends('template')

@section('titre')
  Questionnaire
@endsection

@section('head')
@endsection

@section('contenu')
  <form method="POST" action="https://parrainage.herokuapp.com/home/qcm">
    <input type="button" value="ajouter une Question" id="creerQuestion" />
    <input type="submit" value="Publier QCM" id="post" />
  </form>
@endsection

@section('script')
  <script type='text/javascript'>
    var NumQuestion = 0;
    $("#creerQuestion").click(function () {
      NumQuestion += 1;
      $("#post").before(
        '<fieldset id=' + NumQuestion + '><legend>Question ' + NumQuestion + '</legend><input type="text" class="CorpsQuestion" placeholder="Entrez votre question"><input type="button" class="addChoix" value="ajouter un choix"/></fieldset>'
      );
    })

    $(document).on("click", ".addChoix", function () {
      var $fieldset = $(this).parent();
      var idRadio = $fieldset.attr("id");
      var nbChoix = $fieldset.children("div").length + 1;
      $fieldset.append(
        '<div><input type="radio" name="C' + idRadio + '" value="'+name+'.'+nbChoix+'"/><input type="text" id="'+name+'.'+nbChoix+'" placeholder="Choix ' + nbChoix + '"/></div>');
    })
  </script>
@endsection