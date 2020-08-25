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
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn  js-active" type="button" title="Vehicle rental price">8</button>
                </div>
            </div>
            <div >
                <h3> Vehicle rental price</h3>
                <p></p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="price">Price (value per day) *</label>
                            <div class="form-group">
                                <input type="text" id="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="deposit">Deposit *</label>
                            <div class="form-group">
                                <input type="text" id="deposit" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="col-xs-6">
                            <label for="iban">IBAN *</label>
                            <div class="form-group">
                                <input type="text" id="iban" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="bic">BIC *</label>
                            <div class="form-group">
                                <input type="text" id="bic" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="Name_holder">Name holder *</label>
                            <div class="form-group">
                                <input type="text" id="Name_holder" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="address">address *</label>
                            <div class="form-group">
                                <input type="text" id="address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                        <button class="btn btn-info btn-lg" style="margin-top:10px;" onclick="back_step7()">BACK</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align:center">
                <button class="btn btn-success btn-block" style="margin-top:30px;height:50px;" onclick="create_ads()">CREATE YOUR AD</button><hr>
                <hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3>Data protection !</h3>
                <p> Your exact address will never be communicated on our site. It will only be communicated to the renter after the rental has been confirmed.</p>
            </div>
        </div>
    </div>
</div>



