'use strict';

(function () {
    window.CustomAlert = CustomAlert;
    
    var template;
    var showing = false;

    function CustomAlert(config) {
        config = getFinalConfig(config);
        if (config.targets) {
            var limit = config.targets.length;
    
            if (limit > 0) {
                var dialog = new DialogAlert(config);    
                for (var i = 0; i < limit; i++) {
                    setupEvents(config.targets[i], dialog);
                }
            }
        } else {
            var dialog = new DialogAlert(config);
            dialog.show();
        }
    }

    function DialogAlert(settings) {
        var _this = this;
        var modal = getTemplateAlert();
        var title = modal.querySelector('.custom-alert-title');
        var close = modal.querySelector('.custom-alert-btn-close');
        var yes   = modal.querySelector('.custom-btn-alert');
        var body  = modal.querySelector('.custom-alert-body');

        title.innerHTML = settings.title;
        body.innerHTML = settings.body;
        close.innerHTML = settings.btn_close;
        yes.innerHTML = settings.btn_yes;

        if(settings.danger){
            body.classList.add('danger');
            yes.classList.add('btn-danger');
        }
        else{
            body.classList.add('success');
            yes.classList.add('btn-success');
        }

        close.addEventListener('click', closeAlert);        
        yes.addEventListener('click', closeAlert);

        if (settings.has_overlay) {
            var overlay = document.createElement('DIV');

            modal.appendChild(overlay);
            overlay.className = 'custom-overlay';
            overlay.addEventListener('click', closeAlert);
        }

        function closeAlert(event) {
            event.preventDefault();
            _this.hide();
            _this.setContext(undefined);
        }

        _this.modal = modal;
    }

    DialogAlert.prototype.setContext = function (context) {
        this.context = context;
    };

    DialogAlert.prototype.show = function () {
        if (showing) {
            $warn('CustomConfir: There\'s already a alert showing');
            return;
        }
        
        showing = true;
        document.body.appendChild(this.modal);
    };

    DialogAlert.prototype.hide = function () {
        showing = false;
        this.modal.remove();
    };

    function getFinalConfig(config) {
        var _defaults = {
            title: I18n.t('alert_dialog'),
            body: I18n.t('alert_content'),
            btn_yes: I18n.t('close'),            
            btn_close: '<i class="fa fa-times"></i>',
            has_overlay: true,
            danger: false,
        };

        if (typeof config === 'string') {
            _defaults.targets = config;
        } else if (typeof config === 'object') {
            Object.assign(_defaults, config)
        }

        if (typeof _defaults.targets === 'string') {
            _defaults.targets = document.querySelectorAll(_defaults.targets);
        } else if (typeof _defaults.targets === 'object' && ! _defaults.targets.length) {
            _defaults.targets = [_defaults.targets];
        }

        return _defaults;
    }

    function setupEvents(el, dialog) {
        el.addEventListener('click', function (event) {
            event.preventDefault();
            dialog.setContext(el);
            dialog.show();
        }, false);
    }

    function getTemplateAlert() {
        if (! template) {
            template = document.createElement('DIV');
            template.className = 'custom-alert';
            template.innerHTML = `<div class="custom-alert-content">
                                    <header class="custom-alert-header"> 
                                        <h2 class="custom-alert-title"></h2> 
                                        <button class="custom-alert-btn-close">
                                            <i class="fa fa-times"></i>
                                        </button> 
                                    </header> 
                                    <div class="custom-alert-body"></div>
                                    <footer class="custom-alert-footer">
                                        <button class="custom-btn-alert btn-sx btn btn-sm "></button>
                                    </footer>
                                </div>`;
        }

        return template.cloneNode(true);
    }

    function $warn() {
        if (typeof window.console === 'object' && typeof console.warn === 'function') {
            console.warn.apply(console, arguments);
        }
    }

})();
