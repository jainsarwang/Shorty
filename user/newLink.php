<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Make New Link</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/logout-logo.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
        <style>
            /* ::placeholder {
                text-align: center;
            }*/

            input:focus {
                outline: none;
            } 

        </style>
    </head>

<script>
    function newLink(){
        // console.log("llllllllllll");
        // console.log("llllllllllll");
        // console.log("llllllllllll");
        // console.log("llllllllllll");
        // console.log("llllllllllll");
        let linkIsFor = document.querySelector('#linkIsFor').value;
        let originalLink = document.querySelector('#originalLink').value;
        let shortenLink = document.querySelector('#shortenLink').value;

        var formData = new FormData();
        formData.append('linkIsFor',  linkIsFor);
        formData.append('originalLink',  originalLink);
        formData.append('shortenLink',  shortenLink);

        <?php
            $uno = $_GET['uno'];
        ?>


        let check=true;
        for (const value of formData.values()) {
            console.log(value);
            if(value=='' || value=='undefined'){
                check=false;
            }
        }   
        console.log("../admin/dBconn/api.php?q=addLink&uno=".$uno);
        if(check==true){
            $.ajax({
                    type: "POST",
                    url: "../admin/dBconn/api.php?q=addLink&uno=<?php echo  $uno?>",
                    data : formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        // alert(data.message);
                        // console.log(data.message);
                        // window.location.replace();
                        // window.location.replace('./files/registered.php');
                        console.log("Successf");
                        alert("Sucess!!")
                        // window.location.replace('./login.php');
                    },
                    error: function(xhr, status, error){
                        // window.location.reload();
                        console.log("Nooooo!!!!");
                        alert("No!!")

                        // window.location.replace('./files/registered.php');

                        // alert("Fill in the details");
                    },
            });
	    }

    }
</script>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <?php include'header.php'; ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Link Shortener</h4>
                                       <a href=""><button type="submit" class="btn btn-warning waves-effect waves-light" style="position: absolute;top: 29px;right: 15px;">Login as Admin</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <!-- <h4 class="mt-0 header-title">Link Shortener</h4> -->
                                            <!-- <p class="text-muted font-14">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p> -->
           

                                            <form class="repeater" method="POST">
                                                <div data-repeater-list="category-group">
                                                    <div data-repeater-item>
                                                <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Link is for</label>
                                                        <input type="text" class="form-control" required placeholder="Link is for" name="linkIsFor" id="linkIsFor"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Original Link</label>
                                                        <input type="text" class="form-control" required placeholder="Original Link" id="originalLink" name="originalLink"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <label>Shorten Link</label>
                                                </div>
                                                <div class=" form-control col-md-12"> 
                                                    <span class="form-group">
                                                        <label> <b>http://micro.epizy.com/</b> </label>
                                                        <span><input type="text" id="form3Example4"   placeholder="Custom Short Link" style="border:0px"  id="shortenLink" name="shortenLink"/></span>
                                                    </span>
                                                          
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                            <button type="button" name="" onclick="" class="btn btn-info waves-effect waves-light">Generate Random Number</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <!-- <div class="col-md-12">
                                                <label>Shorten Link</label>
                                                    <div class="form-group">
                                             
                                                        <span>
                                                            <span> <b>http://micro.epizy.com/ </b> </span>
                                                            <input type="text" id="form3Example4" class="form-control"  placeholder="Custom Short Link" id="shortenLink" name="shortenLink"/>
                                                        </span>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Id</label>
                                                        <div>
                                                            <input type="email" class="form-control" required placeholder="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>Advisory member <i class="ti-info-alt tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Advisory"></i></label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                         
                                                      -->
                                               
                                                
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BSC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                           
                                                            
                                                        </select>
                                                    </div>
                                                </div> -->
                                     
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>BYC Interested</label>
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                            

                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="password"
                                                                    class="form-control" required
                                                                    placeholder="Enter your password"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="password"
                                                                    class="form-control" required
                                                                    placeholder="Enter your confirm password"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                 -->
                                                
                                                <!-- <div class="col-md-4">
                                                    <div class="form-group ">
                                                    <label>City</label>
                                                        <select class="form-control">
                                                            <option>Select City</option>
                                                            <option>City 1</option>
                                                            <option>City 2</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                
<!--                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Zipcode / pincode</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                    class="form-control" required
                                                                    placeholder="Enter your pincode / zipcode"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <div>
                                                            <textarea required class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                         <!-- <div class="col-md-12" style="    text-align: end;">
                                            <input data-repeater-delete type="button" value="Delete" class="btn btn-danger text-end">
                                        </div> -->
                                        </div>
                                            </div>
                                        </div>
                                                 <!-- <div class="col-md-12" >
                                        <input data-repeater-create type="button" value="+ Add Family" class="btn btn-warning ">
                                                </div> -->
                                                 <div class="col-md-12 text-center">
                                                    <div class="form-group mb-0">
                                                        <div>
                                                            <button type="submit" name="submit" onclick="newLink()" class="btn btn-success waves-effect waves-light">
                                                                Check & Confirm
                                                            </button>
                                                            <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                    </form>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->


                        </div>
                            <!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include'footer.php';?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Parsley js -->
        <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/pages/form-validation.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    <script>
    // jquery.repeater version 1.2.1
// https://github.com/DubFriend/jquery.repeater
// (MIT) 09-10-2016
// Brian Detering <BDeterin@gmail.com> (http://www.briandetering.net/)
(function ($) {
'use strict';

var identity = function (x) {
    return x;
};

var isArray = function (value) {
    return $.isArray(value);
};

var isObject = function (value) {
    return !isArray(value) && (value instanceof Object);
};

var isNumber = function (value) {
    return value instanceof Number;
};

var isFunction = function (value) {
    return value instanceof Function;
};

var indexOf = function (object, value) {
    return $.inArray(value, object);
};

var inArray = function (array, value) {
    return indexOf(array, value) !== -1;
};

var foreach = function (collection, callback) {
    for(var i in collection) {
        if(collection.hasOwnProperty(i)) {
            callback(collection[i], i, collection);
        }
    }
};


var last = function (array) {
    return array[array.length - 1];
};

var argumentsToArray = function (args) {
    return Array.prototype.slice.call(args);
};

var extend = function () {
    var extended = {};
    foreach(argumentsToArray(arguments), function (o) {
        foreach(o, function (val, key) {
            extended[key] = val;
        });
    });
    return extended;
};

var mapToArray = function (collection, callback) {
    var mapped = [];
    foreach(collection, function (value, key, coll) {
        mapped.push(callback(value, key, coll));
    });
    return mapped;
};

var mapToObject = function (collection, callback, keyCallback) {
    var mapped = {};
    foreach(collection, function (value, key, coll) {
        key = keyCallback ? keyCallback(key, value) : key;
        mapped[key] = callback(value, key, coll);
    });
    return mapped;
};

var map = function (collection, callback, keyCallback) {
    return isArray(collection) ?
        mapToArray(collection, callback) :
        mapToObject(collection, callback, keyCallback);
};

var pluck = function (arrayOfObjects, key) {
    return map(arrayOfObjects, function (val) {
        return val[key];
    });
};

var filter = function (collection, callback) {
    var filtered;

    if(isArray(collection)) {
        filtered = [];
        foreach(collection, function (val, key, coll) {
            if(callback(val, key, coll)) {
                filtered.push(val);
            }
        });
    }
    else {
        filtered = {};
        foreach(collection, function (val, key, coll) {
            if(callback(val, key, coll)) {
                filtered[key] = val;
            }
        });
    }

    return filtered;
};

var call = function (collection, functionName, args) {
    return map(collection, function (object, name) {
        return object[functionName].apply(object, args || []);
    });
};

//execute callback immediately and at most one time on the minimumInterval,
//ignore block attempts
var throttle = function (minimumInterval, callback) {
    var timeout = null;
    return function () {
        var that = this, args = arguments;
        if(timeout === null) {
            timeout = setTimeout(function () {
                timeout = null;
            }, minimumInterval);
            callback.apply(that, args);
        }
    };
};


var mixinPubSub = function (object) {
    object = object || {};
    var topics = {};

    object.publish = function (topic, data) {
        foreach(topics[topic], function (callback) {
            callback(data);
        });
    };

    object.subscribe = function (topic, callback) {
        topics[topic] = topics[topic] || [];
        topics[topic].push(callback);
    };

    object.unsubscribe = function (callback) {
        foreach(topics, function (subscribers) {
            var index = indexOf(subscribers, callback);
            if(index !== -1) {
                subscribers.splice(index, 1);
            }
        });
    };

    return object;
};

// jquery.input version 0.0.0
// https://github.com/DubFriend/jquery.input
// (MIT) 09-04-2014
// Brian Detering <BDeterin@gmail.com> (http://www.briandetering.net/)
(function ($) {
'use strict';

var createBaseInput = function (fig, my) {
    var self = mixinPubSub(),
        $self = fig.$;

    self.getType = function () {
        throw 'implement me (return type. "text", "radio", etc.)';
    };

    self.$ = function (selector) {
        return selector ? $self.find(selector) : $self;
    };

    self.disable = function () {
        self.$().prop('disabled', true);
        self.publish('isEnabled', false);
    };

    self.enable = function () {
        self.$().prop('disabled', false);
        self.publish('isEnabled', true);
    };

    my.equalTo = function (a, b) {
        return a === b;
    };

    my.publishChange = (function () {
        var oldValue;
        return function (e, domElement) {
            var newValue = self.get();
            if(!my.equalTo(newValue, oldValue)) {
                self.publish('change', { e: e, domElement: domElement });
            }
            oldValue = newValue;
        };
    }());

    return self;
};


var createInput = function (fig, my) {
    var self = createBaseInput(fig, my);

    self.get = function () {
        return self.$().val();
    };

    self.set = function (newValue) {
        self.$().val(newValue);
    };

    self.clear = function () {
        self.set('');
    };

    my.buildSetter = function (callback) {
        return function (newValue) {
            callback.call(self, newValue);
        };
    };

    return self;
};

var inputEqualToArray = function (a, b) {
    a = isArray(a) ? a : [a];
    b = isArray(b) ? b : [b];

    var isEqual = true;
    if(a.length !== b.length) {
        isEqual = false;
    }
    else {
        foreach(a, function (value) {
            if(!inArray(b, value)) {
                isEqual = false;
            }
        });
    }

    return isEqual;
};

var createInputButton = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'button';
    };

    self.$().on('change', function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputCheckbox = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'checkbox';
    };

    self.get = function () {
        var values = [];
        self.$().filter(':checked').each(function () {
            values.push($(this).val());
        });
        return values;
    };

    self.set = function (newValues) {
        newValues = isArray(newValues) ? newValues : [newValues];

        self.$().each(function () {
            $(this).prop('checked', false);
        });

        foreach(newValues, function (value) {
            self.$().filter('[value="' + value + '"]')
                .prop('checked', true);
        });
    };

    my.equalTo = inputEqualToArray;

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputEmail = function (fig) {
    var my = {},
        self = createInputText(fig, my);

    self.getType = function () {
        return 'email';
    };

    return self;
};

var createInputFile = function (fig) {
    var my = {},
        self = createBaseInput(fig, my);

    self.getType = function () {
        return 'file';
    };

    self.get = function () {
        return last(self.$().val().split('\\'));
    };

    self.clear = function () {
        // http://stackoverflow.com/questions/1043957/clearing-input-type-file-using-jquery
        this.$().each(function () {
            $(this).wrap('<form>').closest('form').get(0).reset();
            $(this).unwrap();
        });
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
        // self.publish('change', self);
    });

    return self;
};

var createInputHidden = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'hidden';
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};
var createInputMultipleFile = function (fig) {
    var my = {},
        self = createBaseInput(fig, my);

    self.getType = function () {
        return 'file[multiple]';
    };

    self.get = function () {
        // http://stackoverflow.com/questions/14035530/how-to-get-value-of-html-5-multiple-file-upload-variable-using-jquery
        var fileListObject = self.$().get(0).files || [],
            names = [], i;

        for(i = 0; i < (fileListObject.length || 0); i += 1) {
            names.push(fileListObject[i].name);
        }

        return names;
    };

    self.clear = function () {
        // http://stackoverflow.com/questions/1043957/clearing-input-type-file-using-jquery
        this.$().each(function () {
            $(this).wrap('<form>').closest('form').get(0).reset();
            $(this).unwrap();
        });
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputMultipleSelect = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'select[multiple]';
    };

    self.get = function () {
        return self.$().val() || [];
    };

    self.set = function (newValues) {
        self.$().val(
            newValues === '' ? [] : isArray(newValues) ? newValues : [newValues]
        );
    };

    my.equalTo = inputEqualToArray;

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputPassword = function (fig) {
    var my = {},
        self = createInputText(fig, my);

    self.getType = function () {
        return 'password';
    };

    return self;
};

var createInputRadio = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'radio';
    };

    self.get = function () {
        return self.$().filter(':checked').val() || null;
    };

    self.set = function (newValue) {
        if(!newValue) {
            self.$().each(function () {
                $(this).prop('checked', false);
            });
        }
        else {
            self.$().filter('[value="' + newValue + '"]').prop('checked', true);
        }
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputRange = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'range';
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputSelect = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'select';
    };

    self.$().change(function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputText = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'text';
    };

    self.$().on('change keyup keydown', function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputTextarea = function (fig) {
    var my = {},
        self = createInput(fig, my);

    self.getType = function () {
        return 'textarea';
    };

    self.$().on('change keyup keydown', function (e) {
        my.publishChange(e, this);
    });

    return self;
};

var createInputURL = function (fig) {
    var my = {},
        self = createInputText(fig, my);

    self.getType = function () {
        return 'url';
    };

    return self;
};

var buildFormInputs = function (fig) {
    var inputs = {},
        $self = fig.$;

    var constructor = fig.constructorOverride || {
        button: createInputButton,
        text: createInputText,
        url: createInputURL,
        email: createInputEmail,
        password: createInputPassword,
        range: createInputRange,
        textarea: createInputTextarea,
        select: createInputSelect,
        'select[multiple]': createInputMultipleSelect,
        radio: createInputRadio,
        checkbox: createInputCheckbox,
        file: createInputFile,
        'file[multiple]': createInputMultipleFile,
        hidden: createInputHidden
    };

    var addInputsBasic = function (type, selector) {
        var $input = isObject(selector) ? selector : $self.find(selector);

        $input.each(function () {
            var name = $(this).attr('name');
            inputs[name] = constructor[type]({
                $: $(this)
            });
        });
    };

    var addInputsGroup = function (type, selector) {
        var names = [],
            $input = isObject(selector) ? selector : $self.find(selector);

        if(isObject(selector)) {
            inputs[$input.attr('name')] = constructor[type]({
                $: $input
            });
        }
        else {
            // group by name attribute
            $input.each(function () {
                if(indexOf(names, $(this).attr('name')) === -1) {
                    names.push($(this).attr('name'));
                }
            });

            foreach(names, function (name) {
                inputs[name] = constructor[type]({
                    $: $self.find('input[name="' + name + '"]')
                });
            });
        }
    };


    if($self.is('input, select, textarea')) {
        if($self.is('input[type="button"], button, input[type="submit"]')) {
            addInputsBasic('button', $self);
        }
        else if($self.is('textarea')) {
            addInputsBasic('textarea', $self);
        }
        else if(
            $self.is('input[type="text"]') ||
            $self.is('input') && !$self.attr('type')
        ) {
            addInputsBasic('text', $self);
        }
        else if($self.is('input[type="password"]')) {
            addInputsBasic('password', $self);
        }
        else if($self.is('input[type="email"]')) {
            addInputsBasic('email', $self);
        }
        else if($self.is('input[type="url"]')) {
            addInputsBasic('url', $self);
        }
        else if($self.is('input[type="range"]')) {
            addInputsBasic('range', $self);
        }
        else if($self.is('select')) {
            if($self.is('[multiple]')) {
                addInputsBasic('select[multiple]', $self);
            }
            else {
                addInputsBasic('select', $self);
            }
        }
        else if($self.is('input[type="file"]')) {
            if($self.is('[multiple]')) {
                addInputsBasic('file[multiple]', $self);
            }
            else {
                addInputsBasic('file', $self);
            }
        }
        else if($self.is('input[type="hidden"]')) {
            addInputsBasic('hidden', $self);
        }
        else if($self.is('input[type="radio"]')) {
            addInputsGroup('radio', $self);
        }
        else if($self.is('input[type="checkbox"]')) {
            addInputsGroup('checkbox', $self);
        }
        else {
            //in all other cases default to a "text" input interface.
            addInputsBasic('text', $self);
        }
    }
    else {
        addInputsBasic('button', 'input[type="button"], button, input[type="submit"]');
        addInputsBasic('text', 'input[type="text"]');
        addInputsBasic('password', 'input[type="password"]');
        addInputsBasic('email', 'input[type="email"]');
        addInputsBasic('url', 'input[type="url"]');
        addInputsBasic('range', 'input[type="range"]');
        addInputsBasic('textarea', 'textarea');
        addInputsBasic('select', 'select:not([multiple])');
        addInputsBasic('select[multiple]', 'select[multiple]');
        addInputsBasic('file', 'input[type="file"]:not([multiple])');
        addInputsBasic('file[multiple]', 'input[type="file"][multiple]');
        addInputsBasic('hidden', 'input[type="hidden"]');
        addInputsGroup('radio', 'input[type="radio"]');
        addInputsGroup('checkbox', 'input[type="checkbox"]');
    }

    return inputs;
};

$.fn.inputVal = function (newValue) {
    var $self = $(this);

    var inputs = buildFormInputs({ $: $self });

    if($self.is('input, textarea, select')) {
        if(typeof newValue === 'undefined') {
            return inputs[$self.attr('name')].get();
        }
        else {
            inputs[$self.attr('name')].set(newValue);
            return $self;
        }
    }
    else {
        if(typeof newValue === 'undefined') {
            return call(inputs, 'get');
        }
        else {
            foreach(newValue, function (value, inputName) {
                inputs[inputName].set(value);
            });
            return $self;
        }
    }
};

$.fn.inputOnChange = function (callback) {
    var $self = $(this);
    var inputs = buildFormInputs({ $: $self });
    foreach(inputs, function (input) {
        input.subscribe('change', function (data) {
            callback.call(data.domElement, data.e);
        });
    });
    return $self;
};

$.fn.inputDisable = function () {
    var $self = $(this);
    call(buildFormInputs({ $: $self }), 'disable');
    return $self;
};

$.fn.inputEnable = function () {
    var $self = $(this);
    call(buildFormInputs({ $: $self }), 'enable');
    return $self;
};

$.fn.inputClear = function () {
    var $self = $(this);
    call(buildFormInputs({ $: $self }), 'clear');
    return $self;
};

}(jQuery));

$.fn.repeaterVal = function () {
    var parse = function (raw) {
        var parsed = [];

        foreach(raw, function (val, key) {
            var parsedKey = [];
            if(key !== "undefined") {
                parsedKey.push(key.match(/^[^\[]*/)[0]);
                parsedKey = parsedKey.concat(map(
                    key.match(/\[[^\]]*\]/g),
                    function (bracketed) {
                        return bracketed.replace(/[\[\]]/g, '');
                    }
                ));

                parsed.push({
                    val: val,
                    key: parsedKey
                });
            }
        });

        return parsed;
    };

    var build = function (parsed) {
        if(
            parsed.length === 1 &&
            (parsed[0].key.length === 0 || parsed[0].key.length === 1 && !parsed[0].key[0])
        ) {
            return parsed[0].val;
        }

        foreach(parsed, function (p) {
            p.head = p.key.shift();
        });

        var grouped = (function () {
            var grouped = {};

            foreach(parsed, function (p) {
                if(!grouped[p.head]) {
                    grouped[p.head] = [];
                }
                grouped[p.head].push(p);
            });

            return grouped;
        }());

        var built;

        if(/^[0-9]+$/.test(parsed[0].head)) {
            built = [];
            foreach(grouped, function (group) {
                built.push(build(group));
            });
        }
        else {
            built = {};
            foreach(grouped, function (group, key) {
                built[key] = build(group);
            });
        }

        return built;
    };

    return build(parse($(this).inputVal()));
};

$.fn.repeater = function (fig) {
    fig = fig || {};

    var setList;

    $(this).each(function () {

        var $self = $(this);

        var show = fig.show || function () {
            $(this).show();
        };

        var hide = fig.hide || function (removeElement) {
            removeElement();
        };

        var $list = $self.find('[data-repeater-list]').first();

        var $filterNested = function ($items, repeaters) {
            return $items.filter(function () {
                return repeaters ?
                    $(this).closest(
                        pluck(repeaters, 'selector').join(',')
                    ).length === 0 : true;
            });
        };

        var $items = function () {
            return $filterNested($list.find('[data-repeater-item]'), fig.repeaters);
        };

        var $itemTemplate = $list.find('[data-repeater-item]')
                                 .first().clone().hide();

        var $firstDeleteButton = $filterNested(
            $filterNested($(this).find('[data-repeater-item]'), fig.repeaters)
            .first().find('[data-repeater-delete]'),
            fig.repeaters
        );

        if(fig.isFirstItemUndeletable && $firstDeleteButton) {
            $firstDeleteButton.remove();
        }

        var getGroupName = function () {
            var groupName = $list.data('repeater-list');
            return fig.$parent ?
                fig.$parent.data('item-name') + '[' + groupName + ']' :
                groupName;
        };

        var initNested = function ($listItems) {
            if(fig.repeaters) {
                $listItems.each(function () {
                    var $item = $(this);
                    foreach(fig.repeaters, function (nestedFig) {
                        $item.find(nestedFig.selector).repeater(extend(
                            nestedFig, { $parent: $item }
                        ));
                    });
                });
            }
        };

        var $foreachRepeaterInItem = function (repeaters, $item, cb) {
            if(repeaters) {
                foreach(repeaters, function (nestedFig) {
                    cb.call($item.find(nestedFig.selector)[0], nestedFig);
                });
            }
        };

        var setIndexes = function ($items, groupName, repeaters) {
            $items.each(function (index) {
                var $item = $(this);
                $item.data('item-name', groupName + '[' + index + ']');
                $filterNested($item.find('[name]'), repeaters)
                .each(function () {
                    var $input = $(this);
                    // match non empty brackets (ex: "[foo]")
                    var matches = $input.attr('name').match(/\[[^\]]+\]/g);

                    var name = matches ?
                        // strip "[" and "]" characters
                        last(matches).replace(/\[|\]/g, '') :
                        $input.attr('name');


                    var newName = groupName + '[' + index + '][' + name + ']' +
                        ($input.is(':checkbox') || $input.attr('multiple') ? '[]' : '');

                    $input.attr('name', newName);

                    $foreachRepeaterInItem(repeaters, $item, function (nestedFig) {
                        var $repeater = $(this);
                        setIndexes(
                            $filterNested($repeater.find('[data-repeater-item]'), nestedFig.repeaters || []),
                            groupName + '[' + index + ']' +
                                        '[' + $repeater.find('[data-repeater-list]').first().data('repeater-list') + ']',
                            nestedFig.repeaters
                        );
                    });
                });
            });

            $list.find('input[name][checked]')
                .removeAttr('checked')
                .prop('checked', true);
        };

        setIndexes($items(), getGroupName(), fig.repeaters);
        initNested($items());
        if(fig.initEmpty) {
            $items().remove();
        }

        if(fig.ready) {
            fig.ready(function () {
                setIndexes($items(), getGroupName(), fig.repeaters);
            });
        }

        var appendItem = (function () {
            var setItemsValues = function ($item, data, repeaters) {
                if(data || fig.defaultValues) {
                    var inputNames = {};
                    $filterNested($item.find('[name]'), repeaters).each(function () {
                        var key = $(this).attr('name').match(/\[([^\]]*)(\]|\]\[\])$/)[1];
                        inputNames[key] = $(this).attr('name');
                    });

                    $item.inputVal(map(
                        filter(data || fig.defaultValues, function (val, name) {
                            return inputNames[name];
                        }),
                        identity,
                        function (name) {
                            return inputNames[name];
                        }
                    ));
                }


                $foreachRepeaterInItem(repeaters, $item, function (nestedFig) {
                    var $repeater = $(this);
                    $filterNested(
                        $repeater.find('[data-repeater-item]'),
                        nestedFig.repeaters
                    )
                    .each(function () {
                        var fieldName = $repeater.find('[data-repeater-list]').data('repeater-list');
                        if(data && data[fieldName]) {
                            var $template = $(this).clone();
                            $repeater.find('[data-repeater-item]').remove();
                            foreach(data[fieldName], function (data) {
                                var $item = $template.clone();
                                setItemsValues(
                                    $item,
                                    data,
                                    nestedFig.repeaters || []
                                );
                                $repeater.find('[data-repeater-list]').append($item);
                            });
                        }
                        else {
                            setItemsValues(
                                $(this),
                                nestedFig.defaultValues,
                                nestedFig.repeaters || []
                            );
                        }
                    });
                });

            };

            return function ($item, data) {
                $list.append($item);
                setIndexes($items(), getGroupName(), fig.repeaters);
                $item.find('[name]').each(function () {
                    $(this).inputClear();
                });
                setItemsValues($item, data || fig.defaultValues, fig.repeaters);
            };
        }());

        var addItem = function (data) {
            var $item = $itemTemplate.clone();
            appendItem($item, data);
            if(fig.repeaters) {
                initNested($item);
            }
            show.call($item.get(0));
        };

        setList = function (rows) {
            $items().remove();
            foreach(rows, addItem);
        };

        $filterNested($self.find('[data-repeater-create]'), fig.repeaters).click(function () {
            addItem();
        });

        $list.on('click', '[data-repeater-delete]', function () {
            var self = $(this).closest('[data-repeater-item]').get(0);
            hide.call(self, function () {
                $(self).remove();
                setIndexes($items(), getGroupName(), fig.repeaters);
            });
        });
    });

    this.setList = setList;

    return this;
};

}(jQuery));

/*end of jquery repater   */

 $(document).ready(function () {
        'use strict';
   window.id = 0;

  $('.repeater').repeater(
  {
     defaultValues: {
                'id': window.id,
              
            },
    show: function () {
                $(this).slideDown();
     console.log($(this).find('input')[1]);
      $('#cat-id').val(window.id);
            },
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                  window.id--;
                    $('#cat-id').val(window.id);
                  $(this).slideUp(deleteElement);
                  console.log($('.repeater').repeaterVal());
                }
            },
            ready: function (setIndexes) {
            

            }
  }
  );

        
    });
    </script>

    </body>
</html>