/*!
* Dynamsoft JavaScript Library
/*!
* Dynamsoft WebTwain Addon PDF JavaScript Intellisense
* Product: Dynamsoft Web Twain Addon
* Web Site: http://www.dynamsoft.com
*
* Copyright 2017, Dynamsoft Corporation 
* Author: Dynamsoft Support Team
* Version: 12.2
*/

var EnumDWT_ConverMode = {
	CM_DEFAULT: 0,
	CM_RENDERALL : 1, 
	CM_AUTO : 2
};

var PDF = {};
WebTwainAddon.PDF = PDF;

/**
 *  Download and install pdf rasterizer add-on on the local system. 
 * @method Dynamsoft.WebTwain#Download 
 * @param {string} remoteFile specifies the value of which frame to get.
 * @param {function} optionalAsyncSuccessFunc optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.
 * @param {function} optionalAsyncFailureFunc optional. The function to call when the download fails. Please refer to the function prototype OnFailure.
 * @return {bool}
 */
PDF.Download = function(remoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
};

/**
 *  Input the password to decrypt PDF files using PDF Rasterizer add-on. 
 * @method Dynamsoft.WebTwain#SetPassword 
 * @param {string} password Specifies the PDF password.
 * @return {bool}
 */
PDF.SetPassword = function(password) {
};

/**
 *  Set the image convert mode for PDF Rasterizer in Dynamic Web TWAIN. 
 * @method Dynamsoft.WebTwain#SetConvertMode 
 * @param {EnumDWT_ConverMode} convertMode Specifies the image convert mode.
 * @return {bool}
 */
PDF.SetConvertMode = function(convertMode) {
};

/**
 *  Set the output resolution for the PDF Rasterizer in Dynamic Web TWAIN.
 * @method Dynamsoft.WebTwain#ReadRect 
 * @param {float} fResolution Specifies the resolution for convert image from PDF file.
 * @return {bool}
 */
PDF.SetResolution = function(fResolution) {
};

/**
 * Judges whether the local PDF is text-based or not.
 * @method Dynamsoft.WebTwain#ReadRect 
 * @param {string} localFile specifies the local path of the target PDF.
 * @return {bool}
 */
PDF.IsTextBasedPDF = function(localFile) {
};

