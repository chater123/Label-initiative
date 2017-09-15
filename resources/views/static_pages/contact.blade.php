@extends('layouts.master_1')
@section('content')
            <div class="ui internally celled grid">
                <div class="row">
                    <div class="eight wide column">
                        <div class="ui centered card user_card">
                            <div class="image">
                                <img src="images/man.jpg">
                            </div>
                            <div class="content">
                                <div class="header">Idriss El Fane</div>
                                <div class="description">
                                    Mot de Fondateur
                                </div>
                            </div>
                            <div class="extra content">
                                <span class="left floated">
                                    <i class="phone orange icon"></i>
                                    +212666666666
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="eight wide column">
                        <form class="ui form segment centered form_animation">
                            <h4 class="ui dividing orange header">Soyez libre de nous contacter</h4>
                            <div class="field">
                                <label>Nom *</label>
                                <div class="ui left icon input">
                                    <input type="text" name="nom" required placeholder="Nom...">
                                    <i class="user icon orange"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Adresse e-mail *</label>
                                <div class="ui left icon input">
                                    <input type="email" required placeholder="label.initiative@example.com">
                                    <i class="mail outline icon orange"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Téléphone *</label>
                                <div class="ui left icon input">
                                    <input type="tel" name="telephone" required placeholder="telephone...">
                                    <i class="phone icon orange"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Objet *</label>
                                <div class="ui left icon input">
                                    <input type="text" name="objet" required placeholder="objet...">
                                    <i class="align left icon orange"></i>
                                </div>
                            </div>
                            <div class="field">
                                <label>Comment pouvons-nous vous aider ?*</label>
                                <textarea rows="3"></textarea>
                            </div>
                            <button class="ui orange button" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="centered ten wide column">
                        <h4 class="ui dividing orange header">Notre Emplacement</h4>
                        <div class="ui segment">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.259274308835!2d-6.56911608515814!3d34.267440080547956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda75768126bc02f%3A0x43be5e252fc45fba!2zS8Opbml0cmEgTcOpZGluYQ!5e0!3m2!1sen!2s!4v1504900796911" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
@endsection
