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
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle rental price">8</button>
                </div>
            </div>
            <div >
                <h3> Vehicle Equipements</h3>
                <p>Each item can help make your ad more attractive</p>
            </div>
            <!-- here -->
            <hr>

            <h3> Driving related</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)"  name="power_steering" id="power_steering" autocomplete="off" />
                        <div class="btn-group">
                            <label for="power_steering" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="power_steering" class="btn btn-default">
                            Power steering
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="cruise_control" id="cruise_control" autocomplete="off" />
                        <div class="btn-group">
                            <label for="cruise_control" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="cruise_control" class="btn btn-default">
                            Cruise control
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="wheel_drive" id="wheel_drive" autocomplete="off" />
                        <div class="btn-group">
                            <label for="wheel_drive" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="wheel_drive" class="btn btn-default">
                            4-wheel drive
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="gps" id="gps" autocomplete="off" />
                        <div class="btn-group">
                            <label for="gps" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="gps" class="btn btn-default">
                            GPS
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="parking_motion" id="parking_motion" autocomplete="off" />
                        <div class="btn-group">
                            <label for="parking_motion" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="parking_motion" class="btn btn-default">
                            Parking motion
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="rear_camera" id="rear_camera" autocomplete="off" />
                        <div class="btn-group">
                            <label for="rear_camera" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="rear_camera" class="btn btn-default">
                            Rear camera
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="cabin_heating" id="cabin_heating" autocomplete="off" />
                        <div class="btn-group">
                            <label for="cabin_heating" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="cabin_heating" class="btn btn-default">
                                Cabin heating
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="ac" id="ac" autocomplete="off" />
                        <div class="btn-group">
                            <label for="ac" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="ac" class="btn btn-default">
                            AC
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="central_lock" id="central_lock" autocomplete="off" />
                        <div class="btn-group">
                            <label for="central_lock" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="central_lock" class="btn btn-default">
                            Central lock
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="baby_seat" id="baby_seat" autocomplete="off" />
                        <div class="btn-group">
                            <label for="baby_seat" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="baby_seat" class="btn btn-default">
                            Baby seat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="baby_car_chair" id="baby_car_chair" autocomplete="off" />
                        <div class="btn-group">
                            <label for="baby_car_chair" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="baby_car_chair" class="btn btn-default">
                            Baby car-chair
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="winter_tires" id="winter_tires" autocomplete="off" />
                        <div class="btn-group">
                            <label for="winter_tires" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="winter_tires" class="btn btn-default">
                            Winter tires
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="snow_chains" id="snow_chains" autocomplete="off" />
                        <div class="btn-group">
                            <label for="snow_chains" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="snow_chains" class="btn btn-default">
                            Snow chains
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="wedge_levelers" id="wedge_levelers" autocomplete="off" />
                        <div class="btn-group">
                            <label for="wedge_levelers" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="wedge_levelers" class="btn btn-default">
                            Wedge levelers
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="safety_kit" id="safety_kit" autocomplete="off" />
                        <div class="btn-group">
                            <label for="safety_kit" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="safety_kit" class="btn btn-default">
                            Safety kit
                            </label>
                        </div>
                    </div>
                </div>
            </div><hr>
            
            <h3> Life on board</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">

                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Autoradio" id="Autoradio" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Autoradio" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Autoradio" class="btn btn-default">
                            Autoradio
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="CD_Player" id="CD_Player" autocomplete="off" />
                        <div class="btn-group">
                            <label for="CD_Player" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="CD_Player" class="btn btn-default">
                            CD Player
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="MP3" id="MP3" autocomplete="off" />
                        <div class="btn-group">
                            <label for="MP3" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="MP3" class="btn btn-default">
                            MP3
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Audio-in" id="Audio-in" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Audio-in" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Audio-in" class="btn btn-default">
                            Audio-in
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Bluetooth" id="Bluetooth" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Bluetooth" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Bluetooth" class="btn btn-default">
                            Bluetooth
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="TV" id="TV" autocomplete="off" />
                        <div class="btn-group">
                            <label for="TV" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="TV" class="btn btn-default">
                            TV
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="DVD_Player" id="DVD_Player" autocomplete="off" />
                        <div class="btn-group">
                            <label for="DVD_Player" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="DVD_Player" class="btn btn-default">
                            DVD Player
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Satellite_dish" id="Satellite_dish" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Satellite_dish" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Satellite_dish" class="btn btn-default">
                            Satellite dish
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Sponge" id="Sponge" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Sponge" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Sponge" class="btn btn-default" style="font-size:10px;height:34px;">
                            Sponge,dish liquid,<br>chemical toilet products
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="AC_life" id="AC_life" autocomplete="off" />
                        <div class="btn-group">
                            <label for="AC_life" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="AC_life" class="btn btn-default">
                            AC
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Bed_linen" id="Bed_linen" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Bed_linen" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Bed_linen" class="btn btn-default">
                            Bed linen
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Swing_driver" id="Swing_driver" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Swing_driver" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Swing_driver" class="btn btn-default">
                            Swing driver seat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Swing_passenger" id="Swing_passenger" autocomplete="off"/>
                        <div class="btn-group">
                            <label for="Swing_passenger" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Swing_passenger" class="btn btn-default" style="font-size:12px;height:34px;">
                            Swing passenger seat
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Kitchen/Dining area</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Sink" id="Sink" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Sink" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Sink" class="btn btn-default">
                            Sink
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Stove" id="Stove" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Stove" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Stove" class="btn btn-default">
                            Stove
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Oven" id="Oven" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Oven" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Oven" class="btn btn-default">
                            Oven
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Fridge" id="Fridge" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Fridge" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Fridge" class="btn btn-default">
                            Fridge
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Freezer" id="Freezer" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Freezer" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Freezer" class="btn btn-default">
                            Freezer
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Extractor" id="Extractor" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Extractor" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Extractor" class="btn btn-default">
                            Extractor
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Pan-kit" id="Pan-kit" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Pan-kit" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Pan-kit" class="btn btn-default">
                            Pan-kit
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Dishes-kit" id="Dishes-kit" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Dishes-kit" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Dishes-kit" class="btn btn-default">
                            Dishes-kit
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Coffee_machine" id="Coffee_machine" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Coffee_machine" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Coffee_machine" class="btn btn-default">
                            Coffee machine
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Inside_table" id="Inside_table" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Inside_table" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Inside_table" class="btn btn-default">
                            Inside table
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 for="dining_seats">Number of dining seats *</h3>
                            <select name="dining_seats" class="form-control slt" id="dining_seats" style="height:50px;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">+7</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h3> Bathroom</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Inside_shower" id="Inside_shower" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Inside_shower" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Inside_shower" class="btn btn-default">
                            Inside shower
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Outside_shower" id="Outside_shower" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Outside_shower" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Outside_shower" class="btn btn-default">
                            Outside shower
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Integrated_bathroom" id="Integrated_bathroom" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Integrated_bathroom" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Integrated_bathroom" class="btn btn-default">
                            Integrated bathroom
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Portable_toilet" id="Portable_toilet" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Portable_toilet" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Portable_toilet" class="btn btn-default">
                            Portable toilet
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Sink_bath" id="Sink_bath" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Sink_bath" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Sink_bath" class="btn btn-default">
                            Sink
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h3>Outside</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)"  name="Bicycle_carrier" id="Bicycle_carrier" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Bicycle_carrier" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Bicycle_carrier" class="btn btn-default">
                            Bicycle carrier
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)"  name="Side_awning" id="Side_awning" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Side_awning" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Side_awning" class="btn btn-default">
                            Side awning
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)"  name="Outside_table" id="Outside_table" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Outside_table" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Outside_table" class="btn btn-default">
                            Outside table
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Barbecue" id="Barbecue" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Barbecue" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Barbecue" class="btn btn-default">
                            Barbecue
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Towing_adaptor" id="Towing_adaptor" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Towing_adaptor" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Towing_adaptor" class="btn btn-default">
                            Towing adaptor
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Outdoor_luggage_compartment" id="Outdoor_luggage_compartment" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Outdoor_luggage_compartment" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Outdoor_luggage_compartment" class="btn btn-default" style="font-size:10px;height:34px;">
                            Outdoor luggage<br> compartment
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Outside_chairs" id="Outside_chairs" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Outside_chairs" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Outside_chairs" class="btn btn-default">
                            Outside chairs
                            </label>
                        </div>
                    </div>
                </div>
            </div><hr>
            <h3>Autonomy</h3><hr>
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Solar_panels" id="Solar_panels" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Solar_panels" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Solar_panels" class="btn btn-default">
                            Solar panels
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Outside_Eletric" id="Outside_Eletric" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Outside_Eletric" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Outside_Eletric" class="btn btn-default" style="font-size:13px;height:34px;">
                            Outside Eletric outlet
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Auxiliary_battery" id="Auxiliary_battery" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Auxiliary_battery" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Auxiliary_battery" class="btn btn-default">
                                Auxiliary battery
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="ch_box(this)" name="Eletric_generator" id="Eletric_generator" autocomplete="off" />
                        <div class="btn-group">
                            <label for="Eletric_generator" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                <span> </span>
                            </label>
                            <label for="Eletric_generator" class="btn btn-default">
                            Eletric generator
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <div style="text-align:center">
                <hr><button class="btn btn-info btn-lg" onclick="back_step4()">Back</button>
                <button class="btn btn-primary btn-lg" onclick="to_step6()">Next</button><hr>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3>Information !</h3>
                <p> Most renters use filters when searching for a vehicle. Each piece of equipment is an asset that will help your ad stand out from the others.</p>
            </div>
            <div class="aside_advice">
                <h3>Tip</h3>
                <p>All elements related to your listing such as the equipment can be added or modified at a later stage.</p>
            </div>
        </div>
    </div>
</div>



