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
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                </div>
            </div>
            <div >
                <h3> Vehicle parking spot address</h3>
                <p>This allows renters to search by location!</p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="Street">Street *</label>
                            <div class="form-group">
                                <input type="text" id="Street" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="Number">Number *</label>
                            <div class="form-group">
                                <input type="text" id="Number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="Flat_house">Flat/house *</label>
                            <div class="form-group">
                                <input type="text" id="Flat_house" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="Zip_code">Zip-code (IMPORTANT)</label>
                            <div class="form-group">
                                <input type="text" id="Zip_code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="City">City *</label>
                            <div class="form-group">
                                <input type="text" id="City" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="District">District *</label>
                            <div class="form-group">
                                <input type="text" id="District" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="Country">Country *</label>
                            <div class="form-group">
                                <input type="text" id="Country" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div style="text-align:center">
                <hr><button class="btn btn-info btn-lg" onclick="back_step6()">Back</button>
                <button class="btn btn-primary btn-lg" onclick="to_step8()">Next</button><hr>
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



