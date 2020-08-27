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
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle photo upload area">3</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Sleeping spots on the vehicle">4</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle Equipements">5</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                </div>
            </div>
            <div >
                <h3>Technical characteristics of your vehicle</h3>
                <p>This information is essential for us to create your ad.!</p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="id_license_plate">License plate *</label>
                            <div class="form-group">
                                <input type="text" id="id_license_plate" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="id_registered_country">Registered country *</label>
                            <div class="form-group">
                                <input type="text" id="id_registered_country" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="id_license_plate_year">Year construction/license plate year *</label>
                            <div class="form-group">
                                <input type="text" id="id_license_plate_year" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="id_total_weight">Total authorized wight under load *</label>
                            <div class="form-group">
                                <input type="text" id="id_total_weight" class="form-control">
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="id_fuel">Fuel *</label>
                            <select name="id_fuel" class="form-control slt" id="id_fuel" style="height:50px;">
                                <option value="Select">Select</option>
                                <option value="Gasoline">Gasoline</option>
                                <option value="Diesel">Diesel</option>
                                <option value="GPL">GPL</option>
                                <option value="Electric">Electric</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <label for="id_vehicle_consumption">Vehicle Consumption *</label>
                            <select name="id_vehicle_consumption" class="form-control slt" id="id_vehicle_consumption" style="height:50px;">
                                <option value="Select">Select</option>
                                <option value="-6L/100km">-6L/100km</option>
                                <option value="6~8L/100km">6~8L/100km</option>
                                <option value="8~10L/100km">8~10L/100km</option>
                                <option value="10~12L/100km">10~12L/100km</option>
                                <option value="12~14L/100km">12~14L/100km</option>
                                <option value="+14L/100km">+14L/100km</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="id_vehicle_length">Vehicle length *</label>
                            <div class="input-group">
                                <input type="number" id="id_vehicle_length" name="id_vehicle_length" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">meters</span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="id_vehicle_width">Vehicle width *</label>
                            <div class="input-group">
                                <input type="number" id="id_vehicle_width" name="id_vehicle_width" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">meters</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="id_vehicle_height">Vehicle height *</label>
                            <div class="input-group">
                                <input type="number" id="id_vehicle_height" name="id_vehicle_height" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">meters</span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="id_acquisition_value">Acquisition value *</label>
                            <div class="form-group">
                                <input type="text" id="id_acquisition_value" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <p>Please insert the number to which you want to receive your reservation messages</p>
                            <label for="id_cell_phone">Cell phone *</label>
                            <div class="form-group">
                                <input type="text" id="id_cell_phone" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div style="text-align:center">
                <hr><button class="btn btn-primary btn-lg" onclick="back_step1()">Back</button>
                <button class="btn btn-primary btn-lg" onclick="to_step3()">Next</button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3>Data protection !</h3>
                <p> Your vehicle's licence plate and value remain .<strong>strictly confidential and secure</strong>.</p>
            </div>
            <div class="aside_advice">
                <h3>Information</h3>
                <p>All this information is necessary so that we can <strong>secure your listing.</strong>.</p>
            </div>
        </div>
    </div>
</div>



