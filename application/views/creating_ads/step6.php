<style>
    body{
        background:#f3f4f5;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-9" style="background:white;height:auto">
            <div>
                <a href="/" >
                    <img src="/assets/img/sign.png" style="width:130px;height:75px;padding:5px;" alt="Monkey">
                </a>
            </div>
            <div><p style="font-size:18px;text-align:center"><b>STEPS TO COMPLETE YOUR AD</b></p></div>
            <div class="col-xs-12 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle type">1</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Other vehicle informations">2</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle photo upload area">3</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Sleeping spots on the vehicle">4</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle Equipements">5</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                </div>
            </div>
            <div >
                <h3>Description of your vehicle</h3>
                <p>This space allows you to personalize your ad and can make it more appealing to the renter.!</p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="descript"> Vehicles description  *</label>
                            <div class="form-group">
                                <textarea type="text" id="descript" style="font-size:18px;" rows="5" cols="40" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div style="text-align:center">
                <hr><button class="btn btn-primary btn-lg" onclick="back_step5()">Back</button>
                <button class="btn btn-primary btn-lg" onclick="to_step7()">Next</button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3>Inspiration !</h3>
                <p> Describe the strengths of your vehicle, your travels and advice. .<strong>Show everyone why they should rent your vehicle!</strong>.</p>
            </div>
            <div class="aside_advice">
                <h3>An example of a description</h3>
                <p>Our RV is ideal for a family holiday with 2 children or even friends. Its small size allows for driving comfort while being spacious and well laid out inside.

                    We have already had the pleasure of traveling with our 2 children in this vehicle to visit both Brittany and The Châteaux of the Loire Valley. We will be happy to give you advice to visit our beautiful region of Aquitaine! [...]</p>
            </div>
        </div>
    </div>
</div>



