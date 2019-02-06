/*
 Copyright 2014 Google Inc. All rights reserved.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 */

(function(window, $) {

    if (!!window.cookieChoices) {
        return window.cookieChoices;
    }

    var document = window.document;
    // IE8 does not support textContent, so we should fallback to innerText.
    var supportsTextContent = 'textContent' in document.body;

    var cookieChoices = (function() {

        var cookieName = 'SmartAngels_Cookie';
        var cookieConsentId = 'cookieChoiceInfo';
        var dismissLinkId = 'cookieChoiceDismiss';

        function _createHeaderElement(cookieText, dismissText, linkText, linkHref) {

            var cookieConsentElement = document.createElement('div');
            cookieConsentElement.id = cookieConsentId;
            cookieConsentElement.appendChild(_createConsentText(cookieText));

            if (!!linkText && !!linkHref) {
                cookieConsentElement.appendChild(_createInformationLink(linkText, linkHref));
            }

            cookieConsentElement.appendChild(_createDismissLink(dismissText));
            return cookieConsentElement;
        }

        function _createDialogElement(cookieText, dismissText, linkText, linkHref) {

            var cookieConsentElement = document.createElement('div');
            cookieConsentElement.id = cookieConsentId;
            $(cookieConsentElement).addClass('alert alert-primary').css({
                position: 'fixed',
                width: '100%',
                bottom: 0,
                marginBottom: 0,
                zIndex: 9999
            });

            var glassPanel = document.createElement('div');

            var content = document.createElement('div');
            $(content).css({
                display: 'table'
            });

            var dialog = document.createElement('div');
            $(dialog).addClass('container');

            var dismissLink = _createDismissLink(dismissText);
            $(dismissLink).addClass('btn btn-default btn-outline');

            var consentText = _createConsentText(cookieText);
            $(consentText).css({
                display: 'table-cell',
                verticalAlign: 'middle'
            });
            content.appendChild(consentText);
            if (!!linkText && !!linkHref) {
                var informationLink = _createInformationLink(linkText, linkHref);
                $(informationLink).addClass('cookieChoiceInfo_container_linkText').css({color: 'white'});
                consentText.appendChild(informationLink);
            }

            dialog.appendChild(content);
            $('<div/>').addClass('cookieChoiceInfo_container_btn_OK')
                .append($(dismissLink)).appendTo($(content));
            cookieConsentElement.appendChild(glassPanel);
            cookieConsentElement.appendChild(dialog);
            return cookieConsentElement;
        }

        function _setElementText(element, text) {
            if (supportsTextContent) {
                element.textContent = text;
            } else {
                element.innerHTML = text;
            }
        }

        function _createConsentText(cookieText) {
            var consentText = document.createElement('span');
            $(consentText).css({display:'block'});
            _setElementText(consentText, cookieText);
            return consentText;
        }

        function _createDismissLink(dismissText) {
            var dismissLink = document.createElement('a');
            _setElementText(dismissLink, dismissText);
            dismissLink.id = dismissLinkId;
            dismissLink.href = '#';

            return dismissLink;
        }

        function _createInformationLink(linkText, linkHref) {
            var infoLink = document.createElement('a');
            _setElementText(infoLink, linkText);
            infoLink.href = linkHref;
            infoLink.target = '_blank';

            return infoLink;
        }

        function _dismissLinkClick() {
            _saveUserPreference();
            _removeCookieConsent();
            return false;
        }

        function _showCookieConsent(cookieText, dismissText, linkText, linkHref, isDialog) {
            if (_shouldDisplayConsent()) {
                _removeCookieConsent();
                var consentElement = (isDialog) ?
                    _createDialogElement(cookieText, dismissText, linkText, linkHref) :
                    _createHeaderElement(cookieText, dismissText, linkText, linkHref);
                var fragment = document.createDocumentFragment();
                fragment.appendChild(consentElement);
                document.body.appendChild(fragment.cloneNode(true));
                document.getElementById(dismissLinkId).onclick = _dismissLinkClick;
                $('a').click(function(){
                    _saveUserPreference();
                    _removeCookieConsent();
                });
            }
        }

        function showCookieConsentBar(cookieText, dismissText, linkText, linkHref) {
            _showCookieConsent(cookieText, dismissText, linkText, linkHref, false);
        }

        function showCookieConsentDialog(cookieText, dismissText, linkText, linkHref) {
            _showCookieConsent(cookieText, dismissText, linkText, linkHref, true);
        }

        function _removeCookieConsent() {
            var cookieChoiceElement = document.getElementById(cookieConsentId);
            if (cookieChoiceElement != null) {
                cookieChoiceElement.parentNode.removeChild(cookieChoiceElement);
            }
        }

        function _saveUserPreference() {
            // Set the cookie expiry to one year and one month after today.
            var expiryDate = new Date();
            expiryDate.setFullYear(expiryDate.getFullYear() + 1 , expiryDate.getMonth()+1);
            document.cookie = cookieName + '=SmartAngels; expires=' + expiryDate.toGMTString();
        }

        function _shouldDisplayConsent() {
            // Display the header only if the cookie has not been set.
            return !document.cookie.match(new RegExp(cookieName + '=([^;]+)'));
        }

        var exports = {};
        exports.showCookieConsentBar = showCookieConsentBar;
        exports.showCookieConsentDialog = showCookieConsentDialog;
        return exports;
    })();

    window.cookieChoices = cookieChoices;
    return cookieChoices;
})(this, jQuery);
