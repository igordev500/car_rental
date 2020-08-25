<style>h4{color:red;}</style>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/index.php/My_ads">My ads</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/index.php/Myaccount">My account</a>
        </li><li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 4</a>
        </li><li class="nav-item">
            <a class="nav-link" href="#">Link 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 6</a>
        </li>
    </ul>

</nav>
<br>

<div class="container">
    <h2><?php echo $v_type; ?></h2>
    <hr>
    <div>
        <h4>Photos</h4>

        <div class="row" id="photo_v">
            
        </div>

        <div class="row">
            <input type="file" id="newphoto">
            <button onclick="add_new_photo()" class="btn btn-primary">Add more</button>
        </div>
    </div>
    
    <hr>
    <div>
        <h4>Vehicle type</h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="id_chassis_brand">Chassis brand *</label>
                    <div class="form-group">
                        <input type="text" id="id_chassis_brand" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_chassis_model">Chassis model</label>
                    <div class="form-group">
                        <input type="text" id="id_chassis_model" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_model_brand">Model Brand *</label>
                    <div class="form-group">
                        <input type="text" id="id_model_brand" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_conversion_model">Conversion model</label>
                    <div class="form-group">
                        <input type="text" id="id_conversion_model" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_numbers_seats">Numbers of seats *</label>
                    <select name="id_numbers_seats" class="form-control slt" id="id_numbers_seats" style="height:50px;">
                        <option value="Select">Select</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_number_seatbelts">Number of seatbelts *</label>
                    <select name="id_number_seatbelts" class="form-control slt" id="id_number_seatbelts" style="height:50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <div class="col-md-6" style="margin-bottom:30px;">
                    <label for="id_number_berth">Number of berth *</label>
                    <select name="id_number_berth" class="form-control slt" id="id_number_berth" style="height:50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <hr>
            </div>
            <div class="row">
                <button onclick="v_type_u()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px">Save</button>
            </div>
        </div>
    </div>

    <hr>
    <div>
        <h4>Technical characteristics</h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="id_license_plate">License plate *</label>
                    <div class="form-group">
                        <input type="text" id="id_license_plate" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_registered_country">Registered country *</label>
                    <div class="form-group">
                        <input type="text" id="id_registered_country" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_license_plate_year">Year construction/license plate year *</label>
                    <div class="form-group">
                        <input type="text" id="id_license_plate_year" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_total_weight">Total authorized wight under load *</label>
                    <div class="form-group">
                        <input type="text" id="id_total_weight" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <label for="id_vehicle_length">Vehicle length *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_length" name="id_vehicle_length" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">metres</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_width">Vehicle width *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_width" name="id_vehicle_width" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">metres</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_height">Vehicle height *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_height" name="id_vehicle_height" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">Meters</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_acquisition_value">Acquisition value *</label>
                    <div class="form-group">
                        <input type="text" id="id_acquisition_value" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_cell_phone">Cell phone *</label>
                    <div class="form-group">
                        <input type="text" id="id_cell_phone" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary" onclick="u_tech_charact()" style="margin-left:auto;margin-right:auto;width:200px">Save</button>
            </div>
        </div>        
    </div>

    <hr>
    <div>
        <h4>Specify berth type</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="berth_tb">
                    
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="type_berth">Type of Berth</label>
                            <select name="type_berth" class="form-control slt" id="type_berth" style="height:50px;">
                                <option value="Select">Select</option>
                                <option value="Central bed">Central bed</option>
                                <option value="Transversal bed">Transversal bed</option>
                                <option value="Leaning bed">Leaning bed</option>
                                <option value="Build in/off bed">Build in/off bed</option>
                                <option value="Twin bed">Twin bed</option>
                                <option value="Capuccino bed">Capuccino bed</option>
                                <option value="Bench bed">Bench bed</option>
                                <option value="Lift celling bed">Lift celling bed</option>
                                <option value="Bunk bed">Bunk bed</option>
                                <option value="Swing bed">Swing bed</option>
                            </select>
                        </div>
                        
                        <div class="col-xs-4">
                            <label for="width_berth">Width *</label>
                            <div class="input-group">
                                <input type="number" id="width_berth" name="width_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label for="length_berth">Length *</label>
                            <div class="input-group">
                                <input type="number" id="length_berth" name="length_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <button class="btn btn-info" onclick="add_berth()">ADD A new berth</button>
        </div>
    </div>

    <hr>
    <div>
        <h4>Description </h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label for="descript">Vehicles description  *</label>
                    <div class="form-group">
                        <textarea type="text" id="descript" style="font-size:18px;" rows="5" cols="40" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary" onclick="u_intro()" style="margin-left:auto;margin-right:auto;width:200px">Save</button>
            </div>
        </div>
        
    </div>

    <div>
        <h4> Driving related</h4><hr>
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
        
        <h4> Life on board</h4><hr>
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
        <h4>Kitchen/Dining area</h4><hr>
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
                        <label for="dining_seats">Number of dining seats *</label>
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
        <h4> Bathroom</h4><hr>
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
        <h4>Outside</h4><hr>
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
        </div>

        <hr>
        <h4>Autonomy</h4><hr>
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
    </div>

    <hr>
    <div>
        <h4>Vehicle parking spot address</h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="Street">Street *</label>
                    <div class="form-group">
                        <input type="text" id="Street" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Number">Number *</label>
                    <div class="form-group">
                        <input type="text" id="Number" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Flat_house">Flat/house *</label>
                    <div class="form-group">
                        <input type="text" id="Flat_house" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Zip_code">Zip-code (IMPORTANT)</label>
                    <div class="form-group">
                        <input type="text" id="Zip_code" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="City">City *</label>
                    <div class="form-group">
                        <input type="text" id="City" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="District">District *</label>
                    <div class="form-group">
                        <input type="text" id="District" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Country">Country *</label>
                    <div class="form-group">
                        <input type="text" id="Country" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button onclick="parking_up()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px">Save</button>
            </div>
        </div>
    </div>

    <hr>
    <div>
        <h4>Rental price</h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="price">Price (value per day) *</label>
                    <div class="form-group">
                        <input type="text" id="price" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="deposit">Deposit *</label>
                    <div class="form-group">
                        <input type="text" id="deposit" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button onclick="up_price()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px">Save</button>
            </div>
        </div>
    </div>

    <hr>
    <br><br>
</div>


<script>
    
    var sel_ads_id = <?php echo $ads_id; ?>;

    function add_new_photo(){
        if($('#newphoto').val()==''){
            return;
        }
        var formdata = new FormData();
        formdata.append('new_photo', $('#newphoto')[0].files[0]);
        formdata.append('ads_id',sel_ads_id);

        $.ajax({
            url: '/index.php/My_ads/add_newphoto',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function (data) {
                location.reload();
            }
        });
    }

    $(document).ready(function(){
        $.post(
            '/index.php/My_ads/get_all_photo',
            {
                ads_id:sel_ads_id
            },
            function(data){
                $('#photo_v').html(data);
            }
        );

        $.post(
            '/index.php/My_ads/get_type',
            {
                ads_id:sel_ads_id
            },
            function(data){
                var ads_data = JSON.parse(data);
                $('#id_chassis_brand').val(ads_data['chassis_brand']);
                $('#id_chassis_model').val(ads_data['chassis_model']);
                $('#id_model_brand').val(ads_data['model_brand']);
                $('#id_conversion_model').val(ads_data['conversion_model']);
                $('#id_numbers_seats').val(ads_data['seats']);
                $('#id_number_seatbelts').val(ads_data['seatbelts']);
                $('#id_number_berth').val(ads_data['berth']);

                $('#id_license_plate').val(ads_data['license_p']);
                $('#id_registered_country').val(ads_data['reg_country']);
                $('#id_license_plate_year').val(ads_data['license_p_year']);
                $('#id_total_weight').val(ads_data['total_weight']);
                $('#id_fuel').val(ads_data['fuel']);
                $('#id_vehicle_consumption').val(ads_data['consumption']);
                $('#id_vehicle_length').val(ads_data['length']);
                $('#id_vehicle_width').val(ads_data['width']);
                $('#id_vehicle_height').val(ads_data['height']);
                $('#id_acquisition_value').val(ads_data['acquisition_v']);
                $('#id_cell_phone').val(ads_data['cell_phone']);

                $('#descript').val(ads_data['intro']);

                $('#Street').val(ads_data['Street']);
                $('#Number').val(ads_data['Number']);
                $('#Flat_house').val(ads_data['Flat_house']);
                $('#Zip_code').val(ads_data['Zip_code']);
                $('#City').val(ads_data['City']);
                $('#District').val(ads_data['District']);
                $('#Country').val(ads_data['Country']);

                $('#price').val(ads_data['price']);
                $('#deposit').val(ads_data['deposit']);

            }
        );

        $.post(
            '/index.php/My_ads/read_check',
            {
                ads_id:sel_ads_id
            }, 
            function(data){
                var arr = JSON.parse(data);
                $('#dining_seats').val(arr.dining_seats);
                if(arr==null){
                    return;
                }
                else{
                    Object.keys(arr).forEach((e)=>{
                        if($("#"+e)){
                            $("#"+e).attr("checked", arr[e]==1? 1: false);
                            if($("#"+e).attr("checked")){
                                $("#"+e).siblings().children().first().next().addClass('active');
                            }else{
                                $(e).siblings().children().first().next().removeClass('active');
                            }
                        }
                    });
                }
            }
        );

        $.post(
            '/index.php/My_ads/get_berth',
            {
                ads_id:sel_ads_id
            },
            function(data){
                $('#berth_tb').html(data);
            }
        ); 

    });

    function del_berth(e){
        var del_tr = $(e).parent().parent();
        var del_id = $(del_tr).attr('id');
        $.post(
            '/index.php/Create_ads/del_berth',
            {
                del_id:del_id
            },
            function(data){
                $(del_tr).remove();
                location.reload('/');
            }
        );
    }
    
    function ch_box(e){
        var state,id;
        if($(e).is(':checked')){
            $(e).siblings().children().first().next().addClass('active');
            state = 1;
            
        }else{
            $(e).siblings().children().first().next().removeClass('active');
            state = 0
        }

        id = $(e).attr('id');
        
        $.post(
            '/index.php/Create_ads/up_step5',
            {
                state:state,
                id:id
            },
            function(data){
                toastr_call('success','you have been changed successfuly.');
            }
        );
    }

    $('#dining_seats').on('change',function(){
        value = $('#dining_seats').val();
        $.post(
            '/index.php/Create_ads/add_dining_seats_step5',
            {
                value:value
            },
            function(data){
                toastr_call('success','you have been changed successfuly.');
            }
        );
    });

    
    function add_berth(){
        var type_berth = $('#type_berth').val();
        var width_berth = $('#width_berth').val();
        var length_berth = $('#length_berth').val();
        if(type_berth=='Select'){
            $('#type_berth').focus();
            toastr_call('info','please select type of berth!');
            return;
        }else if(width_berth==''){
            $('#width_berth').focus();
            toastr_call('info','Please input the width of berth!');return;
        }else if(length_berth==''){
            $('#length_berth').focus();
            toastr_call('info','Please input the length of berth!');return;
        }
        $.post(
            '/index.php/My_ads/create_berth',
            {
                ads_id:sel_ads_id,
                type_berth:type_berth,
                width_berth:width_berth,
                length_berth:length_berth
            },
            function(data){
                location.reload('/');
            }
        );
    }

    function v_type_u(){
        var id_chassis_brand = $('#id_chassis_brand').val();
        var id_chassis_model = $('#id_chassis_model').val();
        var id_model_brand = $('#id_model_brand').val();
        var id_conversion_model = $('#id_conversion_model').val();
        var id_numbers_seats = $('#id_numbers_seats').val();
        var id_number_seatbelts = $('#id_number_seatbelts').val();
        var id_number_berth = $('#id_number_berth').val();

        $.post(
            '/index.php/My_ads/update_type',
            {
                ads_id:sel_ads_id,
                id_chassis_brand:id_chassis_brand,
                id_chassis_model:id_chassis_model,
                id_model_brand:id_model_brand,
                id_conversion_model:id_conversion_model,
                id_numbers_seats:id_numbers_seats,
                id_number_seatbelts:id_number_seatbelts,
                id_number_berth:id_number_berth
            },
            function(data){
                toastr_call('success','you have been changed successfully.')
            }
        );
    }


    function u_tech_charact(){
        var id_license_plate = $('#id_license_plate').val();
        var id_registered_country = $('#id_registered_country').val();
        var id_license_plate_year = $('#id_license_plate_year').val();
        var id_total_weight = $('#id_total_weight').val();
        var id_fuel = $('#id_fuel').val();
        var id_vehicle_length = $('#id_vehicle_length').val();
        var id_vehicle_consumption = $('#id_vehicle_consumption').val();
        var id_vehicle_width = $('#id_vehicle_width').val();
        var id_vehicle_height = $('#id_vehicle_height').val();
        var id_acquisition_value = $('#id_acquisition_value').val();
        var id_cell_phone = $('#id_cell_phone').val();

        $.post(
            '/index.php/My_ads/update_charact',
            {
                ads_id:sel_ads_id,
                id_license_plate:id_license_plate,
                id_registered_country:id_registered_country,
                id_license_plate_year:id_license_plate_year,
                id_total_weight:id_total_weight,
                id_fuel:id_fuel,
                id_vehicle_length:id_vehicle_length,
                id_vehicle_consumption:id_vehicle_consumption,
                id_vehicle_width:id_vehicle_width,
                id_vehicle_height:id_vehicle_height,
                id_acquisition_value:id_acquisition_value,
                id_cell_phone:id_cell_phone
            },
            function(data){
                toastr_call('success','you have been changed successfully.');
            }
        );
    }

    function u_intro(){
        var intro = $('#descript').val();
        $.post(
            '/index.php/My_ads/update_intro',
            {
                ads_id:sel_ads_id,
                intro:intro
            },
            function(data){
                toastr_call('success','you have been changed successfully.');
            }
        );
    }

    function parking_up(){
        var Street = $('#Street').val();
        var Number = $('#Number').val();
        var Flat_house = $('#Flat_house').val();
        var Zip_code = $('#Zip_code').val();
        var City = $('#City').val();
        var District = $('#District').val();
        var Country = $('#Country').val();

        $.post(
            '/index.php/My_ads/update_parking_address',
            {
                ads_id:sel_ads_id,
                Street:Street,
                Number:Number,
                Flat_house:Flat_house,
                Zip_code:Zip_code,
                City:City,
                District:District,
                Country:Country
            },
            function(data){
                toastr_call('success','you have been changed successfully.')
            }
        );
    }

    function up_price(){
        var price = $('#price').val();
        var deposit = $('#deposit').val();
        $.post(
            '/index.php/My_ads/update_price',
            {
                ads_id:sel_ads_id,
                price:price,
                deposit:deposit
            },
            function(data){
                toastr_call('success','you have been changed successfully.');
            }
        );
    }

</script>

    




