﻿/*!
* Dynamsoft WebTwain JavaScript Intellisense
* Product: Dynamsoft Web Twain
* Web Site: http://www.dynamsoft.com
*
* Copyright 2017, Dynamsoft Corporation 
* Author: Dynamsoft Support Team
* Version: 12.2
*/

/**
 * @namespace Dynamsoft
 */
var Dynamsoft = {};

/// ICAP_PIXELTYPE values (PT_ means Pixel Type)
var EnumDWT_PixelType = {
    TWPT_BW: 0,
    TWPT_GRAY: 1,
    TWPT_RGB: 2,
    TWPT_PALLETE: 3,
    TWPT_CMY: 4,
    TWPT_CMYK: 5,
    TWPT_YUV: 6,
    TWPT_YUVK: 7,
    TWPT_CIEXYZ: 8,
    TWPT_LAB: 9,
    TWPT_SRGB: 10,
    TWPT_SCRGB: 11,
    TWPT_INFRARED: 16
};

var EnumDWT_BorderStyle = {
  /// No border.
  TWBS_NONE: 0,
  /// Flat border.
  TWBS_SINGLEFLAT: 1,
  /// 3D border.  
  TWBS_SINGLE3D: 2
};

/// For query the operation that are supported by the data source on a capability .
/// Application gets these through DG_CONTROL/DAT_CAPABILITY/MSG_QUERYSUPPORT
var EnumDWT_MessageType = {
    TWQC_GET: 1,
    TWQC_SET: 2,
    TWQC_GETDEFAULT: 4,
    TWQC_GETCURRENT: 8,
    TWQC_RESET: 16
};

/// Capabilities
var EnumDWT_Cap = {
    /// Nothing.
    CAP_NONE: 0,
    /// The application is willing to accept this number of images.
    CAP_XFERCOUNT: 1,
    /// Allows the application and Source to identify which compression schemes they have in
    /// common for Buffered Memory and File transfers.
    /// Note for File transfers:
    /// Since only certain file formats support compression, this capability must be negotiated after
    /// setting the desired file format with ICAP_IMAGEFILEFORMAT.
    ICAP_COMPRESSION: 256,
    /// The type of pixel data that a Source is capable of acquiring (for example, black and white, gray, RGB, etc.).
    ICAP_PIXELTYPE: 257,
    /// Unless a quantity is dimensionless or uses a specified unit of measure, ICAP_UNITS determines
    /// the unit of measure for all quantities.
    ICAP_UNITS: 258,
    /// Allows the application and Source to identify which transfer mechanisms the source supports.
    ICAP_XFERMECH: 259,
    /// The name or other identifying information about the Author of the image. It may include a copyright string.
    CAP_AUTHOR: 4096,
    /// A general note about the acquired image.
    CAP_CAPTION: 4097,
    /// If TRUE, Source must acquire data from the document feeder acquire area and other feeder 
    /// capabilities can be used. If FALSE, Source must acquire data from the non-feeder acquire area 
    /// and no other feeder capabilities can be used.
    CAP_FEEDERENABLED: 4098,
    /// Reflect whether there are documents loaded in the Source's feeder.
    CAP_FEEDERLOADED: 4099,
    /// The date and time the image was acquired.
    /// Stored in the form "YYYY/MM/DD HH:mm:SS.sss" where YYYY is the year, MM is the 
    /// numerical month, DD is the numerical day, HH is the hour, mm is the minute, SS is the second, 
    /// and sss is the millisecond.
    CAP_TIMEDATE: 4100,
    /// Returns a list of all the capabilities for which the Source will answer inquiries. Does not indicate
    /// which capabilities the Source will allow to be set by the application. Some capabilities can only
    /// be set if certain setup work has been done so the Source cannot globally answer which
    /// capabilities are "set-able."
    CAP_SUPPORTEDCAPS: 4101,
    /// Allows the application and Source to negotiate capabilities to be used in States 5 and 6.
    CAP_EXTENDEDCAPS: 4102,
    /// If TRUE, the Source will automatically feed the next page from the document feeder after the
    /// number of frames negotiated for capture from each page are acquired. CAP_FEEDERENABLED
    /// must be TRUE to use this capability.
    CAP_AUTOFEED: 4103,
    /// If TRUE, the Source will eject the current page being acquired from and will leave the feeder
    /// acquire area empty.
    /// If CAP_AUTOFEED is TRUE, a fresh page will be advanced.
    /// CAP_FEEDERENABLED must equal TRUE to use this capability.
    /// This capability must have been negotiated as an extended capability to be used in States 5 and 6.
    CAP_CLEARPAGE: 4104,
    /// If TRUE, the Source will eject the current page and advance the next page in the document feeder
    /// into the feeder acquire area.
    /// If CAP_AUTOFEED is TRUE, the same action just described will occur and CAP_AUTOFEED will
    /// remain active.
    /// CAP_FEEDERENABLED must equal TRUE to use this capability.
    /// This capability must have been negotiated as an extended capability to be used in States 5 and 6.
    CAP_FEEDPAGE: 4105,
    /// If TRUE, the Source will return the current page to the input side of the document feeder and
    /// feed the last page from the output side of the feeder back into the acquisition area.
    /// If CAP_AUTOFEED is TRUE, automatic feeding will continue after all negotiated frames from this
    /// page are acquired.
    /// CAP_FEEDERENABLED must equal TRUE to use this capability.
    /// This capability must have been negotiated as an extended capability to be used in States 5 and 6.
    CAP_REWINDPAGE: 4106,
    /// If TRUE, the Source will display a progress indicator during acquisition and transfer, regardless
    /// of whether the Source's user interface is active. If FALSE, the progress indicator will be
    /// suppressed if the Source's user interface is inactive.
    /// The Source will continue to display device-specific instructions and error messages even with
    /// the Source user interface and progress indicators turned off.
    CAP_INDICATORS: 4107,
    /// Returns a list of all the capabilities for which the Source will answer inquiries. Does not indicate
    /// which capabilities the Source will allow to be set by the application. Some capabilities can only
    /// be set if certain setup work has been done so the Source cannot globally answer which
    /// capabilities are "set-able."
    CAP_SUPPORTEDCAPSEXT: 4108,
    /// This capability determines whether the device has a paper sensor that can detect documents on the ADF or Flatbed.
    CAP_PAPERDETECTABLE: 4109,
    /// If TRUE, indicates that this Source supports acquisition with the UI disabled; i.e.,
    /// TW_USERINTERFACE's ShowUI field can be set to FALSE. If FALSE, indicates that this Source
    /// can only support acquisition with the UI enabled.
    CAP_UICONTROLLABLE: 4110,
    /// If TRUE, the physical hardware (e.g., scanner, digital camera, image database, etc.) that
    /// represents the image source is attached, powered on, and communicating.
    CAP_DEVICEONLINE: 4111,
    /// This capability is intended to boost the performance of a Source. The fundamental assumption
    /// behind AutoScan is that the device is able to capture the number of images indicated by the
    /// value of CAP_XFERCOUNT without waiting for the Application to request the image transfers.
    /// This is only possible if the device has internal buffers capable of caching the images it captures.
    /// The default behavior is undefined, because some high volume devices are incapable of anything
    /// but CAP_AUTOSCAN being equal to TRUE. However, if a Source supports FALSE, it should use it
    /// as the mandatory default, since this best describes the behavior of pre-1.8 TWAIN Applications.
    CAP_AUTOSCAN: 4112,
    /// Allows an application to request the delivery of thumbnail representations for the set of images
    /// that are to be delivered.
    /// Setting CAP_THUMBNAILSENABLED to TRUE turns on thumbnail mode. Images transferred
    /// thereafter will be sent at thumbnail size (exact thumbnail size is determined by the Data Source).
    /// Setting this capability to FALSE turns thumbnail mode off and returns full size images.
    CAP_THUMBNAILSENABLED: 4113,
    /// This indicates whether the scanner supports duplex. If so, it further indicates whether one-path
    /// or two-path duplex is supported.
    CAP_DUPLEX: 4114,
    /// The user can set the duplex option to be TRUE or FALSE. If TRUE, the scanner scans both sides
    /// of a paper; otherwise, the scanner will scan only one side of the image.
    CAP_DUPLEXENABLED: 4115,
    /// Allows an application to query a source to see if it implements the new user interface settings dialog. 
    CAP_ENABLEDSUIONLY: 4116,
    CAP_CUSTOMDSDATA: 4117,
    /// Allows the application to specify the starting endorser / imprinter number. All other endorser/
    /// imprinter properties should be handled through the data source's user interface.
    /// The user can set the starting number for the endorser.
    CAP_ENDORSER: 4118,
    /// Turns specific audible alarms on and off.
    CAP_ALARMS: 4120,
    /// The volume of a device's audible alarm. Note that this control affects the volume of all alarms;
    /// no specific volume control for individual types of alarms is provided.
    CAP_ALARMVOLUME: 4121,
    /// The number of images to automatically capture. This does not refer to the number of images to
    /// be sent to the Application, use CAP_XFERCOUNT for that.
    CAP_AUTOMATICCAPTURE: 4122,
    /// For automatic capture, this value selects the number of milliseconds before the first picture is to
    /// be taken, or the first image is to be scanned.
    CAP_TIMEBEFOREFIRSTCAPTURE: 4123,
    /// For automatic capture, this value selects the milliseconds to wait between pictures taken, or images scanned.
    CAP_TIMEBETWEENCAPTURES: 4124,
    /// CapGet() reports the presence of data in the scanner's buffers. CapSet() with a value of TWCB_CLEAR immediately clears the buffers.
    CAP_CLEARBUFFERS: 4125,
    /// Describes the number of pages that the scanner can buffer when CAP_AUTOSCAN is enabled.
    CAP_MAXBATCHBUFFERS: 4126,
    /// The date and time of the device's clock.
    /// Managed in the form "YYYY/MM/DD HH:mm:SS:sss" where YYYY is the year, MM is the
    /// numerical month, DD is the numerical day, HH is the hour, mm is the minute, SS is the second,
    /// and sss is the millisecond.
    CAP_DEVICETIMEDATE: 4127,
    /// CapGet() reports the kinds of power available to the device. CapGetCurrent() reports the current power supply in use.
    CAP_POWERSUPPLY: 4128,
    /// This capability queries the Source for UI support for preview mode. If TRUE, the Source supports preview UI.
    CAP_CAMERAPREVIEWUI: 4129,
    /// A string containing the serial number of the currently selected device in the Source. Multiple
    /// devices may all report the same serial number.
    CAP_SERIALNUMBER: 4132,
    /// CapGet() returns the current list of available printer devices, along with the one currently being used for negotiation. 
    /// CapSet() selects the current device for negotiation, and optionally constrains the list.
    /// Top/Bottom refers to duplex devices, and indicates if the printer is writing on the top or the bottom of the sheet of paper. 
    /// Simplex devices use the top settings. Before/After indicates whether printing occurs before or after the sheet of paper has been scanned.
    CAP_PRINTER: 4134,
    /// Turns the current CAP_PRINTER device on or off.
    CAP_PRINTERENABLED: 4135,
    /// The User can set the starting number for the current CAP_PRINTER device.
    CAP_PRINTERINDEX: 4136,
    /// Specifies the appropriate current CAP_PRINTER device mode.
    /// Note:
    /// • TWPM_SINGLESTRING specifies that the printed text will consist of a single string.
    /// • TWPM _MULTISTRING specifies that the printed text will consist of an enumerated list of
    /// strings to be printed in order.
    /// • TWPM _COMPOUNDSTRING specifies that the printed string will consist of a compound of a
    /// String followed by a value followed by a suffix string.
    CAP_PRINTERMODE: 4137,
    /// Specifies the string(s) that are to be used in the string component when the current
    /// CAP_PRINTER device is enabled.
    CAP_PRINTERSTRING: 4138,
    /// Specifies the string that shall be used as the current CAP_PRINTER device's suffix.
    CAP_PRINTERSUFFIX: 4139,
    /// Allows Application and Source to identify which languages they have in common for the exchange of string data, 
    /// and to select the language of the internal UI. Since the TWLG_xxxx codes include language and country data, there is no separate 
    /// capability for selecting the country.
    CAP_LANGUAGE: 4140,
    /// Helps the Application determine any special actions it may need to take when negotiating
    /// frames with the Source. Allowed values are listed in <see cref="TWCapFeederAlignment"/>.
    /// TWFA_NONE: The alignment is free-floating. Applications should assume
    /// that the origin for frames is on the left.
    /// TWFA_LEFT: The alignment is to the left.
    /// TWFA_CENTER: The alignment is centered. This means that the paper will
    /// be fed in the middle of the ICAP_PHYSICALWIDTH of the
    /// device. If this is set, then the Application should calculate
    /// any frames with a left offset of zero.
    /// TWFA_RIGHT: The alignment is to the right.
    CAP_FEEDERALIGNMENT: 4141,
    /// TWFO_FIRSTPAGEFIRST if the feeder starts with the top of the first page.
    /// TWFO_LASTPAGEFIRST is the feeder starts with the top of the last page.
    CAP_FEEDERORDER: 4142,
    /// Indicates whether the physical hardware (e.g. scanner, digital camera) is capable of acquiring
    /// multiple images of the same page without changes to the physical registration of that page.
    CAP_REACQUIREALLOWED: 4144,
    /// The minutes of battery power remaining to the device.
    CAP_BATTERYMINUTES: 4146,
    /// When used with CapGet(), return the percentage of battery power level on camera. If -1 is returned, it indicates that the battery is not present. 
    CAP_BATTERYPERCENTAGE: 4147,
    /// Added 1.91 
    CAP_CAMERASIDE: 4148,
    /// Added 1.91  
    CAP_SEGMENTED: 4149,  
    /// Added 2.0 
    CAP_CAMERAENABLED: 4150,
    /// Added 2.0   
    CAP_CAMERAORDER: 4151, 
    /// Added 2.0 
    CAP_MICRENABLED: 4152, 
    /// Added 2.0  
    CAP_FEEDERPREP: 4153,  
    /// Added 2.0 
    CAP_FEEDERPOCKET: 4154,  
    /// Added 2.1 
    CAP_AUTOMATICSENSEMEDIUM: 4155,
    /// Added 2.1 
    CAP_CUSTOMINTERFACEGUID: 4156, 
    /// TRUE enables and FALSE disables the Source's Auto-brightness function (if any).
    ICAP_AUTOBRIGHT: 4352,
    /// The brightness values available within the Source.
    ICAP_BRIGHTNESS: 4353,
    /// The contrast values available within the Source.
    ICAP_CONTRAST: 4355,
    /// Specifies the square-cell halftone (dithering) matrix the Source should use to halftone the image.
    ICAP_CUSTHALFTONE: 4356,
    /// Specifies the exposure time used to capture the image, in seconds.
    ICAP_EXPOSURETIME: 4357,
    /// Describes the color characteristic of the subtractive filter applied to the image data. Multiple
    /// filters may be applied to a single acquisition.
    ICAP_FILTER: 4358,
    /// Specifies whether or not the image was acquired using a flash.
    ICAP_FLASHUSED: 4359,
    /// Gamma correction value for the image data.
    ICAP_GAMMA: 4360,
    /// A list of names of the halftone patterns available within the Source.
    ICAP_HALFTONES: 4361,
    /// Specifies which value in an image should be interpreted as the lightest "highlight." All values
    /// "lighter" than this value will be clipped to this value. Whether lighter values are smaller or
    /// larger can be determined by examining the Current value of ICAP_PIXELFLAVOR.
    ICAP_HIGHLIGHT: 4362,
    /// Informs the application which file formats the Source can generate (CapGet()). Tells the Source which file formats the application can handle (CapSet()).
    /// TWFF_TIFF Used for document 
    /// TWFF_PICT Native Macintosh 
    /// TWFF_BMP Native Microsoft 
    /// TWFF_XBM Used for document 
    /// TWFF_JFIF Wrapper for JPEG 
    /// TWFF_FPX FlashPix, used with digital 
    /// TWFF_TIFFMULTI Multi-page TIFF files
    /// TWFF_PNG An image format standard intended for use on the web, replaces GIF
    /// TWFF_SPIFF A standard from JPEG, intended to replace JFIF, also supports JBIG
    /// TWFF_EXIF File format for use with digital cameras. 
    ICAP_IMAGEFILEFORMAT: 4364,
    /// TRUE means the lamp is currently, or should be set to ON. Sources may not support CapSet() operations. 
    ICAP_LAMPSTATE: 4365,
    /// Describes the general color characteristic of the light source used to acquire the image.
    ICAP_LIGHTSOURCE: 4366,
    /// Defines which edge of the "paper" the image's "top" is aligned with. This information is used to adjust the frames to match the 
    /// scanning orientation of the paper. For instance, if an ICAP_SUPPORTEDSIZE of TWSS_ISOA4 has been negotiated, 
    /// and ICAP_ORIENTATION is set to TWOR_LANDSCAPE, then the Source must rotate the frame it downloads to the scanner to reflect the 
    /// orientation of the paper. Please note that setting ICAP_ORIENTATION does not affect the values reported by ICAP_FRAMES; 
    /// it just causes the Source to use them in a different way. The upper-left of the image is defined as the location where both the primary and 
    /// secondary scans originate. (The X axis is the primary scan direction and the Y axis is the secondary scan direction.)
    /// For a flatbed scanner, the light bar moves in the secondary scan direction. For a handheld scanner, the scanner is drug in the 
    /// secondary scan direction. For a digital camera, the secondary direction is the vertical axis when the viewed image is considered upright. 
    ICAP_ORIENTATION: 4368,
    /// The maximum physical width (X-axis) the Source can acquire (measured in units of ICAP_UNITS).
    ICAP_PHYSICALWIDTH: 4369,
    /// The maximum physical height (Y-axis) the Source can acquire (measured in units of ICAP_UNITS).
    ICAP_PHYSICALHEIGHT: 4370,
    /// Specifies which value in an image should be interpreted as the darkest "shadow." All values 
    /// "darker" than this value will be clipped to this value.
    ICAP_SHADOW: 4371,
    /// The list of frames the Source will acquire on each page.
    ICAP_FRAMES: 4372,
    /// The native optical resolution along the X-axis of the device being controlled by the Source. Most
    /// devices will respond with a single value (TW_ONEVALUE).
    /// This is NOT a list of all resolutions that can be generated by the device. Rather, this is the
    /// resolution of the device's optics. Measured in units of pixels per unit as defined by
    /// ICAP_UNITS (pixels per TWUN_PIXELS yields dimensionless data).
    ICAP_XNATIVERESOLUTION: 4374,
    /// The native optical resolution along the Y-axis of the device being controlled by the Source.
    /// Measured in units of pixels per unit as defined by ICAP_UNITS (pixels per TWUN_PIXELS
    /// yields dimensionless data).
    ICAP_YNATIVERESOLUTION: 4375,
    /// All the X-axis resolutions the Source can provide.
    /// Measured in units of pixels per unit as defined by ICAP_UNITS (pixels per TWUN_PIXELS
    /// yields dimensionless data). That is, when the units are TWUN_PIXELS, both
    /// ICAP_XRESOLUTION and ICAP_YRESOLUTION shall report 1 pixel/pixel. Some data sources
    /// like to report the actual number of pixels that the device reports, but that response is more
    /// appropriate in ICAP_PHYSICALHEIGHT and ICAP_PHYSICALWIDTH.
    ICAP_XRESOLUTION: 4376,
    /// All the Y-axis resolutions the Source can provide.
    /// Measured in units of pixels per unit as defined by ICAP_UNITS (pixels per TWUN_PIXELS
    /// yields dimensionless data). That is, when the units are TWUN_PIXELS, both
    /// ICAP_XRESOLUTION and ICAP_YRESOLUTION shall report 1 pixel/pixel. Some data sources
    /// like to report the actual number of pixels that the device reports, but that response is more
    /// appropriate in ICAP_PHYSICALHEIGHT and ICAP_PHYSICALWIDTH.
    ICAP_YRESOLUTION: 4377,
    /// The maximum number of frames the Source can provide or the application can accept per page. 
    /// This is a bounding capability only. It does not establish current or future behavior.
    ICAP_MAXFRAMES: 4378,
    /// This is used with buffered memory transfers. If TRUE, Source can provide application with tiled image data.
    ICAP_TILES: 4379,
    /// Specifies how the bytes in an image are filled by the Source. TWBO_MSBFIRST indicates that the leftmost bit in the byte (usually bit 7) is 
    /// the byte's Most Significant Bit.
    ICAP_BITORDER: 4380,
    /// Used for CCITT Group 3 2-dimensional compression. The 'K' factor indicates how often the
    /// new compression baseline should be re-established. A value of 2 or 4 is common in facsimile
    /// communication. A value of zero in this field will indicate an infinite K factor—the baseline is
    /// only calculated at the beginning of the transfer.
    ICAP_CCITTKFACTOR: 4381,
    /// Describes whether the image was captured transmissively or reflectively.
    ICAP_LIGHTPATH: 4382,
    /// Sense of the pixel whose numeric value is zero (minimum data value). 
    ICAP_PIXELFLAVOR: 4383,
    /// Allows the application and Source to identify which color data formats are available. There are
    /// two options, "planar" and "chunky."
    ICAP_PLANARCHUNKY: 4384,
    /// How the Source can/should rotate the scanned image data prior to transfer. This doesn't use
    /// ICAP_UNITS. It is always measured in degrees. Any applied value is additive with any
    /// rotation specified in ICAP_ORIENTATION.
    ICAP_ROTATION: 4385,
    /// For devices that support fixed frame sizes. 
    /// Defined sizes match typical page sizes. This specifies the size(s) the Source can/should use to acquire image data. 
    ICAP_SUPPORTEDSIZES: 4386,
    /// Specifies the dividing line between black and white. This is the value the Source will use to
    /// threshold, if needed, when ICAP_PIXELTYPE:TWPT_BW.
    /// The value is normalized so there are no units of measure associated with this ICAP.
    ICAP_THRESHOLD: 4387,
    /// All the X-axis scaling values available. A value of '1.0' is equivalent to 100% scaling. Do not use values less than or equal to zero.
    ICAP_XSCALING: 4388,
    /// All the Y-axis scaling values available. A value of '1.0' is equivalent to 100% scaling. Do not use values less than or equal to zero. 
    /// There are no units inherent with this data as it is normalized to 1.0 being "unscaled."
    ICAP_YSCALING: 4389,
    /// Used for CCITT data compression only. Indicates the bit order representation of the stored compressed codes.
    ICAP_BITORDERCODES: 4390,
    /// Used only for CCITT data compression. Specifies whether the compressed codes' pixel "sense" 
    /// will be inverted from the Current value of ICAP_PIXELFLAVOR prior to transfer.
    ICAP_PIXELFLAVORCODES: 4391,
    /// Allows the application and Source to agree upon a common set of color descriptors that are 
    /// made available by the Source. This ICAP is only useful for JPEG-compressed buffered memory image transfers.
    ICAP_JPEGPIXELTYPE: 4392,
    /// Used only with CCITT data compression. Specifies the minimum number of words of compressed codes (compressed data) to be transmitted per line.
    ICAP_TIMEFILL: 4394,
    /// Specifies the pixel bit depths for the Current value of ICAP_PIXELTYPE. For example, when
    /// using ICAP_PIXELTYPE:TWPT_GRAY, this capability specifies whether this is 8-bit gray or 4-bit gray.
    /// This depth applies to all the data channels (for instance, the R, G, and B channels will all have
    /// this same bit depth for RGB data).
    ICAP_BITDEPTH: 4395,
    /// Specifies the Reduction Method the Source should use to reduce the bit depth of the data. Most
    /// commonly used with ICAP_PIXELTYPE:TWPT_BW to reduce gray data to black and white.
    ICAP_BITDEPTHREDUCTION: 4396,
    /// If TRUE the Source will issue a MSG_XFERREADY before starting the scan.
    /// Note: The Source may need to scan the image before initiating the transfer. This is the case if
    /// the scanned image is rotated or merged with another scanned image.
    ICAP_UNDEFINEDIMAGESIZE: 4397,
    /// Allows the application to query the data source to see if it supports extended image attribute capabilities, 
    /// such as Barcode Recognition, Shaded Area Detection and Removal, Skew detection and Removal, and so on.
    ICAP_EXTIMAGEINFO: 4399,
    /// Allows the source to define the minimum height (Y-axis) that the source can acquire.
    ICAP_MINIMUMHEIGHT: 4400,
    /// Allows the source to define theminimum width (X-axis) that the source can acquire.
    ICAP_MINIMUMWIDTH: 4401,
    /// Use this capability to have the Source discard blank images. The Application never sees these
    /// images during the scanning session.
    /// TWBP_DISABLE – this must be the default state for the Source. It indicates that all images will
    /// be delivered to the Application, none of them will be discarded.
    /// TWBP_AUTO – if this is used, then the Source will decide if an image is blank or not and discard
    /// as appropriate.
    /// If the specified value is a positive number in the range 0 to 231–1, then this capability will use it
    /// as the byte size cutoff point to identify which images are to be discarded. If the size of the image
    /// is less than or equal to this value, then it will be discarded. If the size of the image is greater
    /// than this value, then it will be kept so that it can be transferred to the Application.
    ICAP_AUTODISCARDBLANKPAGES: 4404,
    /// Flip rotation is used to properly orient images that flip orientation every other image.
    /// TWFR_BOOK The images to be scanned are viewed in book form, flipping each page from left to right or right to left.
    /// TWFR_FANFOLD The images to be scanned are viewed in fanfold paper style, flipping each page up or down. 
    ICAP_FLIPROTATION: 4406,
    /// Turns bar code detection on and off.
    ICAP_BARCODEDETECTIONENABLED: 4407,
    /// Provides a list of bar code types that can be detected by the current Data Source.
    ICAP_SUPPORTEDBARCODETYPES: 4408,
    /// The maximum number of supported search priorities.
    ICAP_BARCODEMAXSEARCHPRIORITIES: 4409,
    /// A prioritized list of bar code types dictating the order in which bar codes will be sought.
    ICAP_BARCODESEARCHPRIORITIES: 4410,
    /// Restricts bar code searching to certain orientations, or prioritizes one orientation over the other.
    ICAP_BARCODESEARCHMODE: 4411,
    /// Restricts the number of times a search will be retried if none are found on each page.
    ICAP_BARCODEMAXRETRIES: 4412,
    /// Restricts the total time spent on searching for a bar code on each page.
    ICAP_BARCODETIMEOUT: 4413,
    /// When used with CapGet(), returns all camera supported lens zooming range. 
    ICAP_ZOOMFACTOR: 4414,
    /// Turns patch code detection on and off.
    ICAP_PATCHCODEDETECTIONENABLED: 4415,
    /// A list of patch code types that may be detected by the current Data Source.
    ICAP_SUPPORTEDPATCHCODETYPES: 4416,
    /// The maximum number of supported search priorities.
    ICAP_PATCHCODEMAXSEARCHPRIORITIES: 4417,
    /// A prioritized list of patch code types dictating the order in which patch codes will be sought.
    ICAP_PATCHCODESEARCHPRIORITIES: 4418,
    /// Restricts patch code searching to certain orientations, or prioritizes one orientation over the other.
    ICAP_PATCHCODESEARCHMODE: 4419,
    /// Restricts the number of times a search will be retried if none are found on each page.
    ICAP_PATCHCODEMAXRETRIES: 4420,
    /// Restricts the total time spent on searching for a patch code on each page.
    ICAP_PATCHCODETIMEOUT: 4421,
    /// For devices that support flash. CapSet() selects the flash to be used (if any). CapGet() reports the current setting.
    /// This capability replaces ICAP_FLASHUSED, which is only able to negotiate the flash being on or off. 
    ICAP_FLASHUSED2: 4422,
    /// For devices that support image enhancement filtering. This capability selects the algorithm used to improve the quality of the image.
    ICAP_IMAGEFILTER: 4423,
    /// For devices that support noise filtering. This capability selects the algorithm used to remove noise.
    ICAP_NOISEFILTER: 4424,
    /// Overscan is used to scan outside of the boundaries described by ICAP_FRAMES, and is used to help acquire image data that 
    /// may be lost because of skewing.
    /// This is primarily of use for transport scanners which rely on edge detection to begin scanning. 
    /// If overscan is supported, then the device is capable of scanning in the inter-document gap to get the skewed image information. 
    ICAP_OVERSCAN: 4425,
    /// Turns automatic border detection on and off.
    ICAP_AUTOMATICBORDERDETECTION: 4432,
    /// Turns automatic deskew correction on and off.
    ICAP_AUTOMATICDESKEW: 4433,
    /// When TRUE this capability depends on intelligent features within the Source to automatically 
    /// rotate the image to the correct position.
    ICAP_AUTOMATICROTATE: 4434,
    /// Added 1.9 
    ICAP_JPEGQUALITY: 4435,
    /// Added 1.91  
    ICAP_FEEDERTYPE: 4436, 
    /// Added 1.91 
    ICAP_ICCPROFILE: 4437,
    /// Added 2.0  
    ICAP_AUTOSIZE: 4438,  
    /// Added 2.1 
    ICAP_AUTOMATICCROPUSESFRAME: 4439, 
    /// Added 2.1 
    ICAP_AUTOMATICLENGTHDETECTION: 4440,
    /// Added 2.1 
    ICAP_AUTOMATICCOLORENABLED: 4441, 
    /// Added 2.1 
    ICAP_AUTOMATICCOLORNONCOLORPIXELTYPE: 4442, 
    /// Added 2.1 
    ICAP_COLORMANAGEMENTENABLED: 4443,
    /// Added 2.1 
    ICAP_IMAGEMERGE: 4444,  
    /// Added 2.1 
    ICAP_IMAGEMERGEHEIGHTTHRESHOLD: 4445,
    /// Added 2.1  
    ICAP_SUPPORTEDEXTIMAGEINFO: 4446   
};

/// Capabilities exist in many varieties but all have a Default Value, Current Value, and may have other values available that can be supported if selected. 
/// To help categorize the supported values into clear structures, TWAIN defines four types of containers for capabilities: 
/// TW_ONEVALUE, TW_ARRAY, TW_RANGE and TW_ENUMERATION.
var EnumDWT_CapType = {
    /// Nothing.
    TWON_NONE: 0,
    /// A rectangular array of values that describe a logical item. It is similar to the TW_ONEVALUE because the current and default values are the same and 
    /// there are no other values to select from. For example, a list of the names, such as the supported capabilities list returned by the CAP_SUPPORTEDCAPS 
    /// capability, would use this type of container. 
    TWON_ARRAY: 3,
    /// This is the most general type because it defines a list of values from which the Current Value can be chosen. 
    /// The values do not progress uniformly through a range and there is not a consistent step size between the values. 
    /// For example, if a Source's resolution options do not occur in even step sizes then an enumeration would be used (for example, 150, 400, and 600). 
    TWON_ENUMERATION: 4,
    /// A single value whose current and default values are coincident. The range of available values for this type of capability is simply this single value.
    /// For example, a capability that indicates the presence of a document feeder could be of this type.
    TWON_ONEVALUE: 5,
    /// Many capabilities allow users to select their current value from a range of regularly spaced values. 
    /// The capability can specify the minimum and maximum acceptable values and the incremental step size between the values.
    /// For example, resolution might be supported from 100 to 600 in steps of 50 (100, 150, 200, ..., 550, 600). 
    TWON_RANGE: 6
};

/// ICAP_XFERMECH values.
var EnumDWT_TransferMode = {
    /// Native transfers require the data to be transferred to a single large block of RAM. Therefore,
    /// they always face the risk of having an inadequate amount of RAM available to perform the transfer successfully.
    TWSX_NATIVE: 0,
    /// Disk File Mode Transfers.
    TWSX_FILE: 1,
    /// Buffered Memory Mode Transfers.
    TWSX_MEMORY: 2
    /// added 1.91
    //TWSX_MEMFILE  = 4    
};

/// ICAP_IMAGEFILEFORMAT values.
var EnumDWT_FileFormat = {
    /// Used for document imaging. Tagged Image File Format
    TWFF_TIFF: 0, 
    /// Native Macintosh format. Macintosh PICT   
    TWFF_PICT: 1, 
    /// Native Microsoft format. Windows Bitmap
    TWFF_BMP: 2,  
    /// Used for document imaging. X-Windows Bitmap
    TWFF_XBM: 3,  
    /// Wrapper for JPEG images. JPEG File Interchange Format
    TWFF_JFIF: 4, 
    /// FlashPix, used with digital cameras. Flash Pix
    TWFF_FPX: 5,  
    /// Multi-page TIFF files. Multi-page tiff file
    TWFF_TIFFMULTI: 6,
    /// An image format standard intended for use on the web, replaces GIF.
    TWFF_PNG: 7,
    /// A standard from JPEG, intended to replace JFIF, also supports JBIG.
    TWFF_SPIFF: 8,
    /// File format for use with digital cameras.
    TWFF_EXIF: 9,
    /// A file format from Adobe. 1.91 NB: this is not PDF/A 
    TWFF_PDF: 10,   
    /// A file format from the Joint Photographic Experts Group. 1.91
    TWFF_JP2: 11,    
    /// 1.91
    TWFF_JPN: 12,    
    /// 1.91
    TWFF_JPX: 13,    
    /// A file format from LizardTech. 1.91
    TWFF_DEJAVU: 14,    
    /// A file format from Adobe. 2.0
    TWFF_PDFA: 15,   
    /// 2.1 Adobe PDF/A, Version 2
    TWFF_PDFA2: 16  
};


/// TIFF file compression type.
var EnumDWT_TIFFCompressionType = {
    /// Auto mode.
    TIFF_AUTO: 0,
    /// Dump mode.
    TIFF_NONE: 1,
    /// CCITT modified Huffman RLE.
    TIFF_RLE: 2,
    /// CCITT Group 3 fax encoding.
    TIFF_FAX3: 3,
    /// CCITT T.4 (TIFF 6 name).
    TIFF_T4: 3,
    /// CCITT Group 4 fax encoding
    TIFF_FAX4: 4,
    /// CCITT T.6 (TIFF 6 name).
    TIFF_T6: 4,
    /// Lempel Ziv and Welch
    TIFF_LZW: 5,
    TIFF_JPEG: 7,
    TIFF_PACKBITS: 32773
};

/// The method to do interpolation.
var EnumDWT_InterpolationMethod = {
    IM_NEARESTNEIGHBOUR: 1,
    IM_BILINEAR: 2,
    IM_BICUBIC: 3,
	IM_BESTQUALITY: 5
};

/// Image type
var EnumDWT_ImageType = {
    /// Native Microsoft format.
    IT_BMP: 0,
    /// JPEG format.
    IT_JPG: 1,
    /// Tagged Image File Format.
    IT_TIF: 2,
    /// An image format standard intended for use on the web, replaces GIF.
    IT_PNG: 3,
    /// A file format from Adobe.
    IT_PDF: 4,
  IT_ALL: 5
};

/// PDF file compression type.
var EnumDWT_PDFCompressionType = {
    /// Auto mode.
    PDF_AUTO: 0,
    /// CCITT Group 3 fax encoding.
    PDF_FAX3: 1,
    /// CCITT Group 4 fax encoding
    PDF_FAX4: 2,
    /// Lempel Ziv and Welch
    PDF_LZW: 3,
    /// CCITT modified Huffman RLE.
    PDF_RLE: 4,
    PDF_JPEG: 5
};

var EnumDWT_ShowMode = {
    /// Activates the window and displays it in its current size and position.
    SW_ACTIVE: 0,
    /// Maximizes the window
    SW_MAX: 1,
    /// Minimize the window
    SW_MIN: 2,
    /// Close the latest opened editor window
    SW_CLOSE: 3,
    /// Check whether a window exists
    SW_IFLIVE: 4
};

/// The kind of data stored in the container.
var EnumDWT_CapValueType = {
    TWTY_INT8: 0,
    /// Means Item is a TW_INT16  
    TWTY_INT16: 1,    
    /// Means Item is a TW_INT32  
    TWTY_INT32: 2,    
    /// Means Item is a TW_UINT8  
    TWTY_UINT8: 3,    
    /// Means Item is a TW_UINT16 
    TWTY_UINT16: 4,    
    /// Means Item is a TW_int 
    TWTY_int: 5,    
    /// Means Item is a TW_BOOL   
    TWTY_BOOL: 6,    
    /// Means Item is a TW_FIX32  
    TWTY_FIX32: 7,    
    /// Means Item is a TW_FRAME  
    TWTY_FRAME: 8,    
    /// Means Item is a TW_STR32  
    TWTY_STR32: 9,    
    /// Means Item is a TW_STR64  
    TWTY_STR64: 10,    
    /// Means Item is a TW_STR128 
    TWTY_STR128: 11,    
    /// Means Item is a TW_STR255 
    TWTY_STR255: 12        
};

/// ICAP_UNITS values.
var EnumDWT_UnitType = {
    TWUN_INCHES: 0,
    TWUN_CENTIMETERS: 1,
    TWUN_PICAS: 2,
    TWUN_POINTS: 3,
    TWUN_TWIPS: 4,
    TWUN_PIXELS: 5,
    TWUN_MILLIMETERS: 6
};

/// ICAP_DUPLEX values.
var EnumDWT_DUPLEX = {
    TWDX_NONE: 0,
    TWDX_1PASSDUPLEX: 1,
    TWDX_2PASSDUPLEX: 2
};

/// CAP_LANGUAGE values.
var EnumDWT_CapLanguage = {
    /// Danish     
    TWLG_DAN: 0, 
    /// Dutch      
    TWLG_DUT: 1, 
    /// International English  
    TWLG_ENG: 2, 
    /// French Canadian        
    TWLG_FCF: 3, 
    /// Finnish    
    TWLG_FIN: 4, 
    /// French     
    TWLG_FRN: 5, 
    /// German     
    TWLG_GER: 6, 
    /// Icelandic  
    TWLG_ICE: 7, 
    /// Italian     
    TWLG_ITN: 8, 
    /// Norwegian  
    TWLG_NOR: 9, 
    /// Portuguese 
    TWLG_POR: 10, 
    /// Spanish    
    TWLG_SPA: 11, 
    /// Swedish    
    TWLG_SWE: 12, 
    /// U.S. English           
    TWLG_USA: 13, 
    /// Added for 1.8 
    TWLG_USERLOCALE: -1,
    TWLG_AFRIKAANS: 14,
    TWLG_ALBANIA: 15,
    TWLG_ARABIC: 16,
    TWLG_ARABIC_ALGERIA: 17,
    TWLG_ARABIC_BAHRAIN: 18,
    TWLG_ARABIC_EGYPT: 19,
    TWLG_ARABIC_IRAQ: 20,
    TWLG_ARABIC_JORDAN: 21,
    TWLG_ARABIC_KUWAIT: 22,
    TWLG_ARABIC_LEBANON: 23,
    TWLG_ARABIC_LIBYA: 24,
    TWLG_ARABIC_MOROCCO: 25,
    TWLG_ARABIC_OMAN: 26,
    TWLG_ARABIC_QATAR: 27,
    TWLG_ARABIC_SAUDIARABIA: 28,
    TWLG_ARABIC_SYRIA: 29,
    TWLG_ARABIC_TUNISIA: 30,
    /// United Arabic Emirates 
    TWLG_ARABIC_UAE: 31, 
    TWLG_ARABIC_YEMEN: 32,
    TWLG_BASQUE: 33,
    TWLG_BYELORUSSIAN: 34,
    TWLG_BULGARIAN: 35,
    TWLG_CATALAN: 36,
    TWLG_CHINESE: 37,
    TWLG_CHINESE_HONGKONG: 38,
    /// People's Republic of China 
    TWLG_CHINESE_PRC: 39, 
    TWLG_CHINESE_SINGAPORE: 40,
    TWLG_CHINESE_SIMPLIFIED: 41,
    TWLG_CHINESE_TAIWAN: 42,
    TWLG_CHINESE_TRADITIONAL: 43,
    TWLG_CROATIA: 44,
    TWLG_CZECH: 45,
    TWLG_DANISH: 0,
    TWLG_DUTCH: 1,
    TWLG_DUTCH_BELGIAN: 46,
    TWLG_ENGLISH: 2,
    TWLG_ENGLISH_AUSTRALIAN: 47,
    TWLG_ENGLISH_CANADIAN: 48,
    TWLG_ENGLISH_IRELAND: 49,
    TWLG_ENGLISH_NEWZEALAND: 50,
    TWLG_ENGLISH_SOUTHAFRICA: 51,
    TWLG_ENGLISH_UK: 52,
    TWLG_ENGLISH_USA: 13,
    TWLG_ESTONIAN: 53,
    TWLG_FAEROESE: 54,
    TWLG_FARSI: 55,
    TWLG_FINNISH: 4,
    TWLG_FRENCH: 5,
    TWLG_FRENCH_BELGIAN: 56,
    TWLG_FRENCH_CANADIAN: 3,
    TWLG_FRENCH_LUXEMBOURG: 57,
    TWLG_FRENCH_SWISS: 58,
    TWLG_GERMAN: 6,
    TWLG_GERMAN_AUSTRIAN: 59,
    TWLG_GERMAN_LUXEMBOURG: 60,
    TWLG_GERMAN_LIECHTENSTEIN: 61,
    TWLG_GERMAN_SWISS: 62,
    TWLG_GREEK: 63,
    TWLG_HEBREW: 64,
    TWLG_HUNGARIAN: 65,
    TWLG_ICELANDIC: 7,
    TWLG_INDONESIAN: 66,
    TWLG_ITALIAN: 8,
    TWLG_ITALIAN_SWISS: 67,
    TWLG_JAPANESE: 68,
    TWLG_KOREAN: 69,
    TWLG_KOREAN_JOHAB: 70,
    TWLG_LATVIAN: 71,
    TWLG_LITHUANIAN: 72,
    TWLG_NORWEGIAN: 9,
    TWLG_NORWEGIAN_BOKMAL: 73,
    TWLG_NORWEGIAN_NYNORSK: 74,
    TWLG_POLISH: 75,
    TWLG_PORTUGUESE: 10,
    TWLG_PORTUGUESE_BRAZIL: 76,
    TWLG_ROMANIAN: 77,
    TWLG_RUSSIAN: 78,
    TWLG_SERBIAN_LATIN: 79,
    TWLG_SLOVAK: 80,
    TWLG_SLOVENIAN: 81,
    TWLG_SPANISH: 11,
    TWLG_SPANISH_MEXICAN: 82,
    TWLG_SPANISH_MODERN: 83,
    TWLG_SWEDISH: 12,
    TWLG_THAI: 84,
    TWLG_TURKISH: 85,
    TWLG_UKRANIAN: 86,
    /// More stuff added for 1.8 
    TWLG_ASSAMESE: 87,
    TWLG_BENGALI: 88,
    TWLG_BIHARI: 89,
    TWLG_BODO: 90,
    TWLG_DOGRI: 91,
    TWLG_GUJARATI: 92,
    TWLG_HARYANVI: 93,
    TWLG_HINDI: 94,
    TWLG_KANNADA: 95,
    TWLG_KASHMIRI: 96,
    TWLG_MALAYALAM: 97,
    TWLG_MARATHI: 98,
    TWLG_MARWARI: 99,
    TWLG_MEGHALAYAN: 100,
    TWLG_MIZO: 101,
    TWLG_NAGA: 102,
    TWLG_ORISSI: 103,
    TWLG_PUNJABI: 104,
    TWLG_PUSHTU: 105,
    TWLG_SERBIAN_CYRILLIC: 106,
    TWLG_SIKKIMI: 107,
    TWLG_SWEDISH_FINLAND: 108,
    TWLG_TAMIL: 109,
    TWLG_TELUGU: 110,
    TWLG_TRIPURI: 111,
    TWLG_URDU: 112,
    TWLG_VIETNAMESE: 113
};

/// TWAIN Supported sizes.
var EnumDWT_CapSupportedSizes = {
    /// 0
    TWSS_NONE: 0,
    /// 1
    TWSS_A4LETTER: 1,
    /// 2
    TWSS_B5LETTER: 2,
    /// 3
    TWSS_USLETTER: 3,
    /// 4
    TWSS_USLEGAL: 4,
    /// Added 1.5 
    /// 5
    TWSS_A5: 5,
    /// 6
    TWSS_B4: 6,
    /// 7
    TWSS_B6: 7,
    /// Added 1.7 
    /// 9
    TWSS_USLEDGER: 9,
    /// 10
    TWSS_USEXECUTIVE: 10,
    /// 11
    TWSS_A3: 11,
    /// 12
    TWSS_B3: 12,
    /// 13
    TWSS_A6: 13,
    /// 14
    TWSS_C4: 14,
    /// 15
    TWSS_C5: 15,
    /// 16
    TWSS_C6: 16,
    /// Added 1.8 
    /// 17
    TWSS_4A0: 17,
    /// 18
    TWSS_2A0: 18,
    /// 19
    TWSS_A0: 19,
    /// 20
    TWSS_A1: 20,
    /// 21
    TWSS_A2: 21,
    /// 1
    TWSS_A4: 1,
    /// 22
    TWSS_A7: 22,
    /// 23
    TWSS_A8: 23,
    /// 24
    TWSS_A9: 24,
    /// 25
    TWSS_A10: 25,
    /// 26
    TWSS_ISOB0: 26,
    /// 27
    TWSS_ISOB1: 27,
    /// 28
    TWSS_ISOB2: 28,
    /// 12
    TWSS_ISOB3: 12,
    /// 6
    TWSS_ISOB4: 6,
    /// 29
    TWSS_ISOB5: 29,
    /// 7
    TWSS_ISOB6: 7,
    /// 30
    TWSS_ISOB7: 30,
    /// 31
    TWSS_ISOB8: 31,
    /// 32
    TWSS_ISOB9: 32,
    /// 33
    TWSS_ISOB10: 33,
    /// 34
    TWSS_JISB0: 34,
    /// 35
    TWSS_JISB1: 35,
    /// 36
    TWSS_JISB2: 36,
    /// 37
    TWSS_JISB3: 37,
    /// 38
    TWSS_JISB4: 38,
    /// 2
    TWSS_JISB5: 2,
    /// 39
    TWSS_JISB6: 39,
    /// 40
    TWSS_JISB7: 40,
    /// 41
    TWSS_JISB8: 41,
    /// 41
    TWSS_JISB9: 42,
    /// 43
    TWSS_JISB10: 43,
    /// 44
    TWSS_C0: 44,
    /// 45
    TWSS_C1: 45,
    /// 46
    TWSS_C2: 46,
    /// 47
    TWSS_C3: 47,
    /// 48
    TWSS_C7: 48,
    /// 49
    TWSS_C8: 49,
    /// 50
    TWSS_C9: 50,
    /// 51
    TWSS_C10: 51,
    /// 52
    TWSS_USSTATEMENT: 52,
    /// 53
    TWSS_BUSINESSCARD: 53,
    /// 54. Added 2.1
    TWSS_MAXSIZE: 54  
};


/// CAP_FEEDERALIGNMENT values.
var EnumDWT_CapFeederAlignment = {
    /// The alignment is free-floating. Applications should assume that the origin for frames is on the left.
    TWFA_NONE: 0,
    /// The alignment is to the left.
    TWFA_LEFT: 1,
    /// The alignment is centered. This means that the paper will be fed in the middle of the ICAP_PHYSICALWIDTH of the 
    /// device. If this is set, then the Application should calculate any frames with a left offset of zero.
    TWFA_CENTER: 2,
    /// The alignment is to the right.
    TWFA_RIGHT: 3
};
/// CAP_FEEDERORDER values.
var EnumDWT_CapFeederOrder = {
    /// The feeder starts with the top of the first page.
    TWFO_FIRSTPAGEFIRST: 0,
    /// The feeder starts with the top of the last page.
    TWFO_LASTPAGEFIRST: 1
};

/// CAP_PRINTER values.
var EnumDWT_CapPrinter = {
    TWPR_IMPRINTERTOPBEFORE: 0,
    TWPR_IMPRINTERTOPAFTER: 1,
    TWPR_IMPRINTERBOTTOMBEFORE: 2,
    TWPR_IMPRINTERBOTTOMAFTER: 3,
    TWPR_ENDORSERTOPBEFORE: 4,
    TWPR_ENDORSERTOPAFTER: 5,
    TWPR_ENDORSERBOTTOMBEFORE: 6,
    TWPR_ENDORSERBOTTOMAFTER: 7
};
/// CAP_PRINTERMODE values.
var EnumDWT_CapPrinterMode = {
    /// Specifies that the printed text will consist of a single string.
    TWPM_SINGLESTRING: 0,
    /// Specifies that the printed text will consist of an enumerated list of strings to be printed in order.
    TWPM_MULTISTRING: 1,
    /// Specifies that the printed string will consist of a compound of a String followed by a value followed by a suffix string.
    TWPM_COMPOUNDSTRING: 2
};
/// ICAP_BITDEPTHREDUCTION values.
var EnumDWT_CapBitdepthReduction = {
    TWBR_THRESHOLD: 0,
    TWBR_HALFTONE: 1,
    TWBR_CUSTHALFTONE: 2,
    TWBR_DIFFUSION: 3
};
/// ICAP_BITORDER values.
var EnumDWT_CapBitOrder = {
    TWBO_LSBFIRST: 0,
    /// Indicates that the leftmost bit in the byte (usually bit 7) is the byte's Most Significant Bit.
    TWBO_MSBFIRST: 1
};
/// ICAP_FILTER values.
var EnumDWT_CapFilterType = {
    TWFT_RED: 0,
    TWFT_GREEN: 1,
    TWFT_BLUE: 2,
    TWFT_NONE: 3,
    TWFT_WHITE: 4,
    TWFT_CYAN: 5,
    TWFT_MAGENTA: 6,
    TWFT_YELLOW: 7,
    TWFT_BLACK: 8
};
/// ICAP_FLASHUSED2 values.
var EnumDWT_CapFlash = {
    TWFL_NONE: 0,
    TWFL_OFF: 1,
    TWFL_ON: 2,
    TWFL_AUTO: 3,
    TWFL_REDEYE: 4
};
/// ICAP_FLIPROTATION values.
var EnumDWT_CapFlipRotation = {
    /// The images to be scanned are viewed in book form, flipping each page from left to right or right to left.
    TWFR_BOOK: 0,
    /// The images to be scanned are viewed in fanfold paper style, flipping each page up or down.
    TWFR_FANFOLD: 1
};
/// ICAP_IMAGEFILTER values.
var EnumDWT_CapImageFilter = {
    TWIF_NONE: 0,
    TWIF_AUTO: 1,
    /// Good for halftone images.
    TWIF_LOWPASS: 2,
    /// Good for improving text.
    TWIF_BANDPASS: 3,
    /// Good for improving fine lines.
    TWIF_HIGHPASS: 4,
    TWIF_TEXT: 3,
    TWIF_FINELINE: 4
};
/// ICAP_LIGHTPATH values.
var EnumDWT_CapLightPath = {
    TWLP_REFLECTIVE: 0,
    TWLP_TRANSMISSIVE: 1
};
/// ICAP_LIGHTSOURCE values.
var EnumDWT_CapLightSource = {
    TWLS_RED: 0,
    TWLS_GREEN: 1,
    TWLS_BLUE: 2,
    TWLS_NONE: 3,
    TWLS_WHITE: 4,
    TWLS_UV: 5,
    TWLS_IR: 6
};
/// TWEI_MAGTYPE values. (MD_ means Mag Type) Added 2.0 
var EnumDWT_MagType = {
    /// Added 2.0 
    TWMD_MICR: 0, 
    /// added 2.1  
    TWMD_RAW: 1,  
    /// added 2.1 
    TWMD_INVALID: 2  
};
/// ICAP_NOISEFILTER values.
var EnumDWT_CapNoiseFilter = {
    TWNF_NONE: 0,
    TWNF_AUTO: 1,
    TWNF_LONEPIXEL: 2,
    TWNF_MAJORITYRULE: 3
};

/// ICAP_ORIENTATION values.
var EnumDWT_CapORientation = {
    TWOR_ROT0: 0,
    TWOR_ROT90: 1,
    TWOR_ROT180: 2,
    TWOR_ROT270: 3,
    TWOR_PORTRAIT: 0,
    TWOR_LANDSCAPE: 3,
    /// 2.0 
    TWOR_AUTO: 4,          
    /// 2.0 
    TWOR_AUTOTEXT: 5,           
    /// 2.0 
    TWOR_AUTOPICTURE: 6           
};
/// ICAP_OVERSCAN values.
var EnumDWT_CapOverscan = {
    TWOV_NONE: 0,
    TWOV_AUTO: 1,
    TWOV_TOPBOTTOM: 2,
    TWOV_LEFTRIGHT: 3,
    TWOV_ALL: 4
};
/// ICAP_PIXELFLAVOR values.
var EnumDWT_CapPixelFlavor = {
    /// Zero pixel represents darkest shade. zero pixel represents darkest shade  
    TWPF_CHOCOLATE: 0, 
    /// Zero pixel represents lightest shade. zero pixel represents lightest shade 
    TWPF_VANILLA: 1  
};

/// ICAP_PLANARCHUNKY values.
var EnumDWT_CapPlanarChunky = {
    TWPC_CHUNKY: 0,
    TWPC_PLANAR: 1
};

/// Data source status.
var EnumDWT_DataSourceStatus = {
    /// Indicate the data source is closed. 
    TWDSS_CLOSED: 0,
    /// Indicate the data source is opened.
    TWDSS_OPENED: 1,
    /// Indicate the data source is enabled. 
    TWDSS_ENABLED: 2,
    /// Indicate the data source is acquiring image.
    TWDSS_ACQUIRING: 3
};

/// Fit window type
var EnumDWT_FitWindowType = {
    /// Fit the image to the width and height of the window
    enumFitWindow: 0,
    /// Fit the image to the height of the window
    enumFitWindowHeight: 1,
    /// Fit the image to the width of the window
    enumFitWindowWidth: 2
};


var EnumDWT_UploadDataFormat = {
	Binary: 0,
	Base64: 1
};

var EnumDWT_MouseShape = {
	Default: 0,
	Hand: 1,
	Crosshair: 2,
	Zoom: 3
};

/**
 * @WebTWAIN class
 */
Dynamsoft.WebTwain = function (cfg) {
};

var WebTwainAddon = {
};

// properties (get/set) / sync functions  
Dynamsoft.WebTwain.prototype = {
    /// <field name='Addon'>namespace Addon</field>
    Addon: WebTwainAddon,

    /// <field name='AllowMultiSelect' type='bool'>Returns or sets whether multi-page selection is supported.</field>
    AllowMultiSelect: false,

    /// <field name='AllowPluginAuthentication' type='bool'>[Deprecated.] Returns or sets whether allowing the plugin to send authentication request. The default value of this property is TRUE.</field>
    AllowPluginAuthentication: false,

    /// <field name='AsyncMode' type='bool'>[Deprecated.] Returns or sets whether the async mode is activated. With this mode, Dynamic Web TWAIN is able to upload/download files via HTTP/FTP asynchronously. The default value is false.</field>
    AsyncMode: false,

    /// <field name='BackgroundColor' type='int'>Returns or sets the background color of the main control. It is a value specifying the 24-bit RGB value.</field>
    BackgroundColor: 0,

    /// <field name='BackgroundFillColor' type='int'>Returns or sets the fill color of the selected area of an image when it is cut, erased or rotated. It is a value specifying the 24-bit RGB value.</field>
    BackgroundFillColor: 0,

    /// <field name='BarcodeCount' type='int'>[Deprecated.] Returns the number of barcode detected in an image.</field>
    BarcodeCount: 0,

    /// <field name='BitDepth' type='short'>Returns or sets the pixel bit depths for the current value of PixelType property. This is a runtime property.</field>
    BitDepth: 0,

    /// <field name='BlankImageCurrentStdDev' type='float'>Returns the current deviation of the pixels in the image.</field>
    BlankImageCurrentStdDev: 0,

    /// <field name='BlankImageMaxStdDev' type='float'>Returns or sets the standard deviation of the pixels in the image.</field>
    BlankImageMaxStdDev: 0,

    /// <field name='BlankImageThreshold' type='int'>Returns or sets the dividing line between black and white. The default value is 128.</field>
    BlankImageThreshold: 0,

    /// <field name='BorderStyle' type='EnumDWT_BorderStyle'>[Deprecated.] Returns or sets the border style.</field>
    BorderStyle: 0,

    /// <field name='Brightness' type='float'>Returns or sets the brightness values available within the Source. This is a runtime property.</field>
    Brightness: 0,

    /// <field name='BrokerProcessType' type='int'>[Deprecated.] Sets or returns whether brokerprocess is enabled for scanning.</field>
    BrokerProcessType: 0,
    
    /// <field name='BufferMemoryLimit' type='int'>Sets or returns how much physical memory is allowed for storing images currently loaded in Dynamic Web TWAIN. Once the limit is reached, images will be cached on the hard disk.</field>
    BufferMemoryLimit: 0, 

    /// <field name='Capability' type='EnumDWT_Cap'>Specifies the capabiltiy to be negotiated. This is a runtime property.</field>
    Capability: 0,

    /// <field name='CapCurrentIndex' type='int'>Sets or returns the index (0-based) of a list to indicate the Current Value when the value of the CapType property is TWON_ENUMERATION. If the data type of the capability is String, the list is in CapItemsString property. For other data types, the list is in CapItems property. This is a runtime property.</field>
    CapCurrentIndex: 0,

    /// <field name='CapCurrentValue' type='double'>Sets or returns the current value in a range when the value of the CapType property is TWON_RANGE. This is a runtime property.</field>
    CapCurrentValue: 0,

    /// <field name='CapDefaultIndex' type='int'>Returns the index (0-based) of a list to indicate the Default Value when the value of the CapType property is TWON_ENUMERATION. If the data type of the capability is String, the list is in CapItemsString property. For other data types, the list is in CapItems property. This is a runtime, read-only property.</field>
    CapDefaultIndex: 0,

    /// <field name='CapDefaultValue' type='double'>Returns the default value in a range when the value of the CapType property is TWON_RANGE. This is a runtime, read-only property. </field>
    CapDefaultValue: 0,

    /// <field name='CapMaxValue' type='double'>Sets or returns the maximum value in a range when the value of the CapType property is TWON_RANGE. This is a runtime property.</field>
    CapMaxValue: 0,

    /// <field name='CapMinValue' type='double'>Sets or returns the minimum value in a range when the value of the CapType property is TWON_RANGE. This is a runtime property.</field>
    CapMinValue: 0,

    /// <field name='CapNumItems' type='int'>[Deprecated.] Sets or returns how many items are in the list when the value of the CapType property is TWON_ARRAY or TWON_ENUMERATION. For String data type, the list is in CapItemsString property. For other data types, the list is in CapItems property. This is a runtime property.</field>
    CapNumItems: 0,
    
    /// <field name='CapItemsString' type='string'>[Deprecated.] Replaced by GetCapItemsString method and SetCapItemsString method. </field>
    CapItemsString: '',    

    /// <field name='CapStepSize' type='double'>Sets or returns the step size in a range when the value of the CapType property is TWON_RANGE. This is a runtime property.</field>
    CapStepSize: 0,

    /// <field name='CapType' type='EnumDWT_CapType'>Sets or returns the type of capability container used to exchange capability information between application and source. This is a runtime property.</field>
    CapType: 0,

    /// <field name='CapValue' type='double'>Returns or sets the value of the capability specified by Capability property when the value of the CapType property is TWON_ONEVALUE. This is a runtime property.</field>
    CapValue: 0,

    /// <field name='CapValueString' type='string'>Sets or returns the string value for a capability when the value of the CapType property is TWON_ONEVALUE. This is a runtime property.</field>
    CapValueString: '',
    
    /// <field name='CapValueType' type='short'>Sets or returns the value type for reading the value of a capability. This is a runtime property.</field>
    CapValueType: 0,

    /// <field name='Contrast' type='float'>Returns or sets the contrast values available within the Source. This is a runtime property.</field>
    Contrast: 0,

    /// <field name='ProductName' type='string'>Sets or returns the product name string for the application identity.</field>
    ProductName: '',

    /// <field name='CurrentImageIndexInBuffer' type='short'>Returns or sets current index of image in buffer. This is a runtime property.</field>
    CurrentImageIndexInBuffer: 0,

    /// <field name='CurrentSourceName' type='string'>Returns the device name of current source. This is a runtime, read-only property.</field>
    CurrentSourceName: '',

    /// <field name='DataSourceStatus' type='int'>Returns the value indicating the data source status. This is a runtime, read-only property.</field>
    DataSourceStatus: 0,

    /// <field name='DefaultSourceName' type='string'>Returns the device name of default source. This is a runtime, read-only property.</field>
    DefaultSourceName: '',

    /// <field name='Duplex' type='int'>Returns whether the source supports duplex. If so, it further returns the level of duplex the Source supports (one pass or two pass duplex). This is a runtime, read-only property.</field>
    Duplex: 0,

    /// <field name='EnableInteractiveZoom' type='bool'>[Deprecated.] Returns or sets whether the user can zoom image using hot key.</field>
    EnableInteractiveZoom: false,

    /// <field name='ErrorCode' type='int'>Returns the error code. This is a runtime, read-only property.</field>
    ErrorCode: 0,

    /// <field name='ErrorString' type='string'>Returns the error string. This is a runtime, read-only property.</field>
    ErrorString: '',

    /// <field name='FitWindowType' type='EnumDWT_FitWindowType'>Returns or sets whether to resize the image to fit the image to the width or height of the window. To use the property, the view mode should be set to -1 by -1. You can use SetViewMode method to set the view mode.</field>
    FitWindowType: 0,

    /// <field name='FTPPassword' type='string'>Returns or sets the password used to log into the FTP server.</field>
    FTPPassword: '',

    /// <field name='FTPPort' type='int'>Returns or sets the port number of the FTP server.</field>
    FTPPort: 0,

    /// <field name='FTPUserName' type='string'>Returns or sets the user name used to log into the FTP server.</field>
    FTPUserName: '',

    /// <field name='HowManyImagesInBuffer' type='short'>Returns how many images are in buffer. This is a runtime, read-only property.</field>
    HowManyImagesInBuffer: 0,

    /// <field name='HttpFieldNameOfUploadedImage' type='string'>Specifies the field name of uploaded image through POST.</field>
    HttpFieldNameOfUploadedImage: '',

    /// <field name='HTTPPassword' type='string'>[Deprecated.] Sets or returns the password used to log into the HTTP server.</field>
    HTTPPassword: '',

    /// <field name='HTTPPort' type='int'>Returns or sets the port number of the HTTP server.</field>
    HTTPPort: 0,

    /// <field name='HTTPPostResponseString' type='string'>Returns the response string from the HTTP server if an error occurs for HTTPUploadThroughPost() method. This is a runtime, read-only property.</field>
    HTTPPostResponseString: '',

    /// <field name='HTTPUserName' type='string'>[Deprecated.] Returns or sets the user name used to log into the HTTP server.</field>
    HTTPUserName: '',

    /// <field name='IfAllowLocalCache' type='bool'>Returns or sets whether the feature of disk caching is enabled.</field>
    IfAllowLocalCache: false,

    /// <field name='IfAppendImage' type='bool'>Returns or sets whether insert or append new scanned images.</field>
    IfAppendImage: false,

    /// <field name='IfAutoBright' type='bool'>Returns or sets whether the Source's Auto-brightness function is enabled. This is a runtime property.</field>
    IfAutoBright: false,

    /// <field name='IfAutoDiscardBlankpages' type='bool'>Returns or sets whether the data source (scanner) will discard blank images during scanning. The property works only if the device and its driver support discarding blank pages. You can find whether your device supports this capbility from its user manual. Or, you can use the built-in methods of Dynamic Web TWAIN to detect blank images: IsBlankImage, IsBlankImageEx.</field>
    IfAutoDiscardBlankpages: false,

    /// <field name='IfAutoFeed' type='bool'>Returns or sets whether the Source enable automatic document feeding process. This is a runtime property.</field>
    IfAutoFeed: false,

    /// <field name='IfAutomaticBorderDetection' type='bool'>Turns automatic border detection on and off. The property works only if the device and its driver support detecting the border automatically. You can find whether your device supports this capbility from its user manual. </field>
    IfAutomaticBorderDetection: false,

    /// <field name='IfAutomaticDeskew' type='bool'>Turns automatic skew correction on and off.</field>
    IfAutomaticDeskew: false,

    /// <field name='IfAutoScan' type='bool'>Returns or sets whether the Source enables the automatic document scanning process. This is a runtime property.</field>
    IfAutoScan: false,

    /// <field name='IfDisableSourceAfterAcquire' type='bool'>Returns or sets whether close the Data Source User Interface after acquire all images. Default value of this property is FALSE.</field>
    IfDisableSourceAfterAcquire: false,

    /// <field name='IfDuplexEnabled' type='bool'>Returns or sets whether the Source supports duplex. If TRUE, the scanner scans both sides of a paper; otherwise, the scanner will scan only one side of the image. This is a runtime property.</field>
    IfDuplexEnabled: false,

    /// <field name='IfFeederEnabled' type='bool'>Returns or sets whether the Automatic Document Feeder (ADF) is enabled. This is a runtime property.</field>
    IfFeederEnabled: false,

    /// <field name='IfFeederLoaded' type='bool'>Returns whether or not there are documents loaded in the Source's feeder when IfFeederEnabled and IfPaperDetectable are TRUE. This is a runtime, read-only property.</field>
    IfFeederLoaded: false,

    /// <field name='IfFitWindow' type='bool'>Returns or sets whether to resize the image to fit the size of window when the view mode is set to -1 by -1. You can use SetViewMode method to set the view mode.</field>
    IfFitWindow: false,

    /// <field name='IfModalUI' type='bool'>[Deprecated.] Returns or sets whether the UI (User Interface) of Source runs in modal state. Default value of this property is TRUE.</field>
    IfModalUI: false,

    /// <field name='IfOpenImageWithGDIPlus' type='bool'>Sets or returns whether Dynamic Web TWAIN uses  Graphics Device Interface (GDI) when decoding images.</field>
    IfOpenImageWithGDIPlus: false,

    /// <field name='IfPaperDetectable' type='bool'>Returns the value whether the Source has a paper sensor that can detect documents on the ADF or Flatbed. This is a runtime, read-only property.</field>
    IfPaperDetectable: false,

    /// <field name='IfPASVMode' type='bool'>Returns or sets whether FTP passive mode is enabled.</field>
    IfPASVMode: false,

    /// <field name='IfScanInNewThread' type='bool'>[Deprecated.] Returns or sets whether communicate with device in a separate thread. Default value of this property is FALSE.</field>
    IfScanInNewThread: false,

    /// <field name='IfPaperDetectable' type='bool'>Sets or returns whether to show the cancel dialog when uploading images to server.</field>
    IfShowCancelDialogWhenImageTransfer: false,

    /// <field name='IfShowFileDialog' type='bool'>Returns or sets whether to show the file dialog box when saving scanned images or loading images from local folder.</field>
    IfShowFileDialog: false,

    /// <field name='IfShowIndicator' type='bool'>Returns or sets whether the Source displays a progress indicator during acquisition and transfer, regardless of whether the Source's user interface is active. This is a runtime property.</field>
    IfShowIndicator: false,

    /// <field name='IfShowPrintUI' type='bool'>[Deprecated.] Returns or sets whether the driver of the printer displays the User Interface.</field>
    IfShowPrintUI: false,

    /// <field name='IfShowProgressBar' type='bool'>Returns or sets whether the progress bar will be displayed during the transaction. This is a runtime property.</field>
    IfShowProgressBar: false,

    /// <field name='IfShowUI' type='bool'>Returns or sets whether the Source displays the User Interface.</field>
    IfShowUI: false,

    /// <field name='IfSSL' type='bool'>Returns or sets whether SSL is used when uploading or downloading images.</field>
    IfSSL: false,

    /// <field name='IfTiffMultiPage' type='bool'>Return or sets whether the Source allows to save many images in one TIFF file. The default value is FALSE.</field>
    IfTiffMultiPage: false,

    /// <field name='IfUIControllable' type='bool'>Returns whether the Source supports acquisition with the UI (User Interface) disabled. If FALSE, indicates that this Source can only support acquisition with the UI enabled. This is a runtime, read-only property.</field>
    IfUIControllable: false,

    /// <field name='IfUseTwainDSM' type='bool'>Sets or returns whether Dynamic Web TWAIN uses the new TWAIN Data Source Manager (TWAINDSM.dll) when acquiring images from TWAIN devices.</field>
    IfUseTwainDSM: false,
	
    /// <field name='IfAutoScroll' type='bool'>Specifies whether or not to automatically scroll to the last image or stay on the current image when loading or acquiring images</field>
	IfAutoScroll: false,

    /// <field name='ImageBitsPerPixel' type='short'>[Deprecated.] The number of bits in each image pixel (or bit depth). This is a runtime, read-only property.</field>
    ImageBitsPerPixel: 0,

    /// <field name='ImageCaptureDriverType' type='int'>Returns or sets whether a TWAIN driver or Native Scan of Mac OS X is used for document scanning. This property works for Mac edition only.</field>
    ImageCaptureDriverType: 0,

    /// <field name='ImageEditorIfEnableEnumerator' type='bool'>[Deprecated.] Returns or sets whether the image enumerator is enabled in Image Editor.</field>
    ImageEditorIfEnableEnumerator: false,

    /// <field name='ImageEditorIfModal' type='bool'>[Deprecated.] Returns or sets whether the Image Editor is a modal window.</field>
    ImageEditorIfModal: false,

    /// <field name='ImageEditorIfReadonly' type='bool'>[Deprecated.] Returns or sets whether the Image Editor is read-only.</field>
    ImageEditorIfReadonly: false,

    /// <field name='ImageEditorIfModal' type='string'>[Deprecated.] Returns or sets the title of Image Editor window.</field>
    ImageEditorWindowTitle: '',

    /// <field name='ImageLayoutDocumentNumber' type='int'>Returns the document number of the current image. This is a runtime, read-only property.</field>
    ImageLayoutDocumentNumber: 0,

    /// <field name='ImageLayoutFrameBottom' type='float'>Returns the value of the bottom-most edge of the current image frame (in Unit). This is a read-only runtime property.</field>
    ImageLayoutFrameBottom: 0,

    /// <field name='ImageLayoutFrameLeft' type='float'>Returns the value of the left-most edge of the current image frame (in Unit). This is a runtime, read-only property.</field>
    ImageLayoutFrameLeft: 0,

    /// <field name='ImageLayoutFrameNumber' type='int'>Returns the frame number of the current image. This is a runtime, read-only property.</field>
    ImageLayoutFrameNumber: 0,

    /// <field name='ImageLayoutFrameRight' type='float'>Returns the value of the right-most edge of the current image frame (in Unit). This is a runtime, read-only property.</field>
    ImageLayoutFrameRight: 0,

    /// <field name='ImageLayoutFrameTop' type='float'>Returns the value of the top-most edge of the current image frame (in Unit). This is a runtime, read-only property.</field>
    ImageLayoutFrameTop: 0,

    /// <field name='ImageLayoutPageNumber' type='Long'>Returns the page number of the current image. This is a runtime, read-only property.</field>
    ImageLayoutPageNumber: 0,

    /// <field name='ImageLength' type='int'>[Deprecated.] Returns how tall/long, in pixels, the image is. This is a runtime, read-only property.</field>
    ImageLength: 0,

    /// <field name='ImageMargin' type='short'>Returns or sets the margin between images when multiple images are displayed in Dynamic Web TWAIN.</field>
    ImageMargin: 0,

    /// <field name='ImagePixelType' type='EnumDWT_PixelType'>Returns the pixel type of the current image. This is a runtime, read-only property. Please note the property is only valid in OnPreTransfer and OnPostTransfer event.</field>
    ImagePixelType: 0,

    /// <field name='ImageWidth' type='int'>[Deprecated.] Returns how width, in pixels, the image is. This is a runtime, read-only property.</field>
    ImageWidth: 0,

    /// <field name='ImageXResolution' type='float'>[Deprecated.] Returns the X resolution of the current image. X resolution is the number of pixels per Unit in the horizontal direction. This is a runtime, read-only property.</field>
    ImageXResolution: 0,

    /// <field name='ImageYResolution' type='float'>[Deprecated.] Returns the Y resolution of the current image. Y resolution is the number of pixels per Unit in the vertical direction. This is a runtime, read-only property.</field>
    ImageYResolution: 0,

    /// <field name='JPEGQuality' type='short'>Returns or sets the quality of JPEG files and PDF files using JPEG compression.</field>
    JPEGQuality: 0,

    /// <field name='LogLevel' type='short'>Returns or sets the log level for debugging.</field>
    LogLevel: 0,

    /// <field name='MagData' type='string'>Return the magnetic data if the scanner support magnetic data recognition.</field>
    MagData: '',

    /// <field name='MagType' type='short'>Return the magnetic type if the scanner support magnetic data recognition.</field>
    MagType: 0,

    /// <field name='Manufacturer' type='string'>Sets or returns the manufacture string for the application identity.</field>
    Manufacturer: '',

    /// <field name='MaxImagesInBuffer' type='short'>Returns or sets the maximum number of images can be held in buffer. </field>
    MaxImagesInBuffer: 0,

    /// <field name='MaxInternetTransferThreads' type='int'>[Deprecated.] Returns or sets how many threads can be used when you upload files through POST.</field>
    MaxInternetTransferThreads: 0,

    /// <field name='MaxUploadImageSize' type='int'>Sets or returns the maximum allowed size when Dynamic Web TWAIN uploads a document.</field>
    MaxUploadImageSize: 0,

    /// <field name='MouseShape' type='bool'>Returns or sets the shape of the mouse.</field>
    MouseShape: false,

    /// <field name='MouseX' type='int'>Returns the X co-ordinate of the mouse. This is a runtime property.</field>
    MouseX: 0,

    /// <field name='MouseY' type='int'>Returns the Y co-ordinate of the mouse. This is a runtime property.</field>
    MouseY: 0,

    /// <field name='PageSize' type='short'>Returns or sets the page size(s) the Source can/should use to acquire image data. This is a runtime property.</field>
    PageSize: 0,

    /// <field name='PDFAuthor' type='string'>Returns or sets the name of the person who creates the PDF document.</field>
    PDFAuthor: '',

    /// <field name='PDFCompressionType' type='EnumDWT_PDFCompressionType'>Returns or sets the compression type of PDF files. This is a runtime property.</field>
    PDFCompressionType: 0,

    /// <field name='PDFCreationDate' type='string'>Returns or sets the date when the PDF document is created.</field>
    PDFCreationDate: '',

    /// <field name='PDFCreator' type='string'>Returns or sets the name of the application that created the original document, if the PDF document is converted from another form.</field>
    PDFCreator: '',

    /// <field name='PDFKeywords' type='string'>Returns or sets the keywords associated with the PDF document.</field>
    PDFKeywords: '',

    /// <field name='PDFModifiedDate' type='string'>Returns or sets the date when the PDF document is last modified.</field>
    PDFModifiedDate: '',

    /// <field name='PDFProducer' type='string'>Returns or sets the name of the application that converted the PDF document from its native.</field>
    PDFProducer: '',

    /// <field name='PDFSubject' type='string'>Returns or sets the subject of the PDF document.</field>
    PDFSubject: '',

    /// <field name='PDFTitle' type='string'>Returns or sets the title of the PDF document.</field>
    PDFTitle: '',

    /// <field name='PDFVersion' type='string'>Returns or sets the value of the PDF version.</field>
    PDFVersion: '',

    /// <field name='PendingXfers' type='short'>Returns the number of transfers the Source is ready to supply, upon demand. This is a runtime, read-only property.</field>
    PendingXfers: 0,

    /// <field name='PixelFlavor' type='short'>Returns or sets the pixel flavor for acquired images. This is a runtime property.</field>
    PixelFlavor: 0,

    /// <field name='PixelType' type='EnumDWT_PixelType'>Returns or sets the pixel type of current data source. This is a runtime property. Using this property after calling OpenSource() method and before calling AcquireImage().</field>
    PixelType: 0,

    /// <field name='ProductFamily' type='string'>Sets or returns the product family string for the application identity.</field>
    ProductFamily: '',

    /// <field name='ProductKey' type='string'>Sets the product key. A product key is generated in Licensing Tool which is intalled with Dynamic Web TWAIN. Each product key corresponds with a license.</field>
    ProductKey: '',

    /// <field name='ProxyServer' type='string'>[Deprecated.] Returns or sets the name of the proxy server.</field>
    ProxyServer: '',

    /// <field name='Resolution' type='float'>Returns or sets the current resolution for acquired images. This is a runtime property.</field>
    Resolution: 0,

    /// <field name='SelectedImagesCount' type='short'>Returns or sets how many scanned images are selected.</field>
    SelectedImagesCount: 0,

    /// <field name='SelectionImageBorderColor' type='int'>Returns or sets the border color of the selected image. It is a value specifying the 24-bit RGB value.</field>
    SelectionImageBorderColor: 0,

    /// <field name='SelectionRectAspectRatio' type='float'>Specifies a fixed aspect ratio to be used for selecting an area.</field>
    SelectionRectAspectRatio: 0,

    /// <field name='SourceCount' type='int'>Returns how many sources are installed in the system. This is a runtime, read-only property.</field>
    SourceCount: 0,
    
    /// <field name='SourceNameItems' type='string'>[Deprecated.] Replaced by GetSourceNameItems method.</field>
    SourceNameItems: '',
   
    /// <field name='GetSourceNames' type='string'>[Deprecated.]</field>
    GetSourceNames: '',

    /// <field name='TIFFCompressionType' type='EnumDWT_TIFFCompressionType'>Returns or sets the compression type of TIFF files. This is a runtime property.</field>
    TIFFCompressionType: 0,

    /// <field name='TransferMode' type='EnumDWT_TransferMode'>Sets or returns the transfer mode.</field>
    TransferMode: 0,

    /// <field name='Unit' type='short'>Returns or sets the unit of measure. This is a runtime property.</field>
    Unit: 0,

    /// <field name='VersionInfo' type='string'>Sets or returns the version info string for the application identity.</field>
    VersionInfo: '',

    /// <field name='XferCount' type='short'>Returns and sets the number of images you are willing to transfer per session. This is a runtime property.</field>
    XferCount: 0,

    /// <field name='Zoom' type='float'>Returns or sets zoom factor for the image, only valid When the view mode is set to -1 by -1.</field>
    Zoom: 0
};

Dynamsoft.WebTwain.prototype.RegisterEvent = function(name, evt) {
    /// <summary>
    /// Binds a specified function to an event, so that the function gets called whenever the event fires.
    /// </summary>
    /// <param name="name" type="string">the name of the event that the function is bound to.</param>
    /// <param name="evt" type="object">specifies the function to call when event fires.</param>
    /// <returns type="bool"></returns>
};

// --- SCAN start --

Dynamsoft.WebTwain.prototype.CancelAllPendingTransfers = function() {
    /// <summary>Cancels all pending transfers.</summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CloseSource = function() {
    /// <summary>Closes Data Source.</summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CloseSourceManager = function() {
    /// <summary>Closes and unloads Data Source Manager.</summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.DisableSource = function() {
    /// <summary>Disable the source. If the source's user interface is displayed when the source is enabled, it will be closed. </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.FeedPage = function() {
    /// <summary>
    /// Sets the Source to eject the current page and advance the next page in the document feeder into the feeder acquire area when IfFeederEnabled is TRUE.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.GetDeviceType = function() {
    /// <summary>
    /// Retrieve the device type of the currently selected data source, it might be a scanner, a web camera, etc.
    /// </summary>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetSourceNameItems = function(index) {
    /// <summary>
    /// Get the source name according to the source index.
    /// </summary>
    /// <param name="index" type="short">int index. Index is 0-based and can not be greater than SourceCount property.</param>
    /// <returns type="string"></returns>
};

Dynamsoft.WebTwain.prototype.OpenSource = function() {
    /// <summary>
    /// Loads the specified Source into main memory and causes its initialization, 
    /// placing Dynamic Web TWAIN into Capability Negotiation state. If no source is 
    /// specified (no SelectSource() or SelectSourceByIndex() is called), opens the default source.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.OpenSourceManager = function() {
    /// <summary>
    /// Loads and opens Data Source Manager.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ResetImageLayout = function() {
    /// <summary>
    /// Reverts the current image layout to the Data Source's default.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RewindPage = function() {
    /// <summary>
    /// Sets the Source to return the current page to the input side of the document feeder and 
    /// feed the last page from the outside of the feeder back into the acquisition area if IfFeederEnabled is TRUE.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SelectSource = function() {
    /// <summary>
    /// Brings up the TWAIN Data Source Manager's Source Selection User Interface (UI)
    /// so that user can choose which Data Source to be the current Source.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SelectSourceByIndex = function(index) {
    /// <summary>
    /// Selects the index-the source in SourceNameItems property as the current source.
    /// </summary>
    /// <param name="index" type="short">It is the index of SourceNameItems property.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetFileXferInfo = function(fileName, fileFormat) {
    /// <summary>
    /// Sets file name and file format information used in File Transfer Mode.
    /// </summary>
    /// <param name="fileName" type="string">the name of the file to be used in transfer.</param>
    /// <param name="fileFormat" type="EnumDWT_FileFormat">an enumerated value indicates the format of the image.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetImageLayout = function(left, top, right, bottom) {
    /// <summary>
    /// Sets the left, top, right, and bottom sides of the image layout rectangle for the current Data Source.
    /// </summary>
    /// <param name="left" type="float">specifies the floating point number for the left side of the image layout rectangle.</param>
    /// <param name="top" type="float">specifies the floating point number for the top side of the image layout rectangle.</param>
    /// <param name="right" type="float">specifies the floating point number for the right side of the image layout rectangle.</param>
    /// <param name="bottom" type="float">specifies the floating point number for the bottom side of the image layout rectangle.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ClearAllHTTPFormField = function() {
    /// <summary>Clears all the web forms which are used for image uploading.</summary>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.ClearTiffCustomTag = function() {
    /// <summary>Clears the content of all custom tiff tags.</summary>
    /// <returns type="void" />
};

Dynamsoft.WebTwain.prototype.FileExists = function(localFile) {
    /// <summary>Check whether a certain file exists on the local disk.</summary>
    /// <param name="localFile" type="string">specifies the absolute path of the local file.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPDownload = function(FTPServer, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Downloads an image from the FTP server.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be downloaded. It should be the relative path of the file on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPDownloadDirectly = function(FTPServer, FTPRemoteFile, localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Directly download a file from the FTP server to local disk without loading it into Dynamic Web TWAIN.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be downloaded. It should be the relative path of the file on the FTP server.</param>
    /// <param name="localFile" type="string">specify a full path to store the file.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>       
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPDownloadEx = function(FTPServer, FTPRemoteFile, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Downloads an image from the FTP server.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be downloaded. It should be the relative path of the file on the FTP server.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">simage format of the file to be downloaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>       
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUpload = function(FTPServer, sImageIndex, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the image of a specified index in the buffer to the FTP server.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of the image in the buffer. The index is 0-based.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be created on the FTP server. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadDirectly = function(FTPServer, localFile, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Directly upload a specific file to the FTP server without loading it into Dynamic Web TWAIN.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="localFile" type="string">specify the the full path of a local file.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be created on the FTP server. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadEx = function(FTPServer, sImageIndex, FTPRemoteFile, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the image of a specified index in the buffer to the FTP server as a specified image format.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <param name="FTPRemoteFile" type="string">the name of the file to be created on the FTP server. It should be a relative path on the FTP server.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be created on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadAllAsMultiPageTIFF = function(FTPServer, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads all images in buffer to the FTP server as Multi-Page TIFF.</summary>
    /// <param name="FTPServer" type="string"> the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the image to be uploaded. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadAllAsPDF = function(FTPServer, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads all images in buffer to the FTP server as Multi-Page PDF.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the image to be uploaded. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadAsMultiPagePDF = function(FTPServer, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the selected images in buffer to the FTP server as Multi-Page PDF.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the image to be uploaded. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.FTPUploadAsMultiPageTIFF = function(FTPServer, FTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the selected images in buffer to the FTP server as Multi-Page TIFF.</summary>
    /// <param name="FTPServer" type="string">the name of the FTP server.</param>
    /// <param name="FTPRemoteFile" type="string">the name of the image to be uploaded. It should be a relative path on the FTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPDownload = function(HTTPServer, HTTPRemoteFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Downloads an image from the HTTP server.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="HTTPRemoteFile" type="string">the name of the image to be downloaded. It should be the relative path of the file on the HTTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPDownloadDirectly = function(HTTPServer, HTTPRemoteFile, localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Directly downloads a file from the HTTP server to a local disk without loading it into Dynamic Web TWAIN.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="HTTPRemoteFile" type="string">The relative path of the file on the HTTP server.</param>
    /// <param name="localFile" type="string">specify the location to store the downloaded file.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPDownloadEx = function(HTTPServer, HTTPRemoteFile, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Downloads an image from the HTTP server.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="HTTPRemoteFile" type="string">the relative path of the file on the HTTP server, or path to an action page (with necessary parameters) which gets and sends back the image stream to the client (please check the sample for more info)</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be downloaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPDownloadThroughPost = function(HTTPServer, HTTPRemoteFile, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary> Download an image from the server using a HTTP Post call.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="HTTPRemoteFile" type="string">the relative path of the file on the HTTP server, or path to an action page (with necessary parameters) which gets and sends back the image stream to the client (please check the sample for more info)</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be downloaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the download succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the download fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPost = function(HTTPServer, sImageIndex, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the image of a specified index in the buffer to the HTTP server through the HTTP POST method.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp". </param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPostDirectly = function(HTTPServer, localFile, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Directly upload a specific local file to the HTTP server through the HTTP POST method without loading it into Dynamic Web TWAIN.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="localFile" type="string">specifies the path of a local file .</param>
    /// <param name="ActionPage" type="string">the specified page for posting files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp". </param>
    /// <param name="fileName" type="string">the name of the file to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPostEx = function(HTTPServer, sImageIndex, ActionPage, fileName, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the image of a specified index in the buffer to the HTTP server as a specified image format through the HTTP POST method.</summary>
    /// <param name="HTTPServer" type="string"> the name of the HTTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp". </param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be created on the HTTP server.s</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadAllThroughPostAsMultiPageTIFF = function(HTTPServer, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads all images in the buffer to the HTTP server through the HTTP Post method as a Multi-Page TIFF.</summary>
    /// <param name="HTTPServer" type="string"> the name of the HTTP server.</param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp".</param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPostAsMultiPageTIFF = function(HTTPServer, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the selected images in the buffer to the HTTP server through the HTTP Post method as a Multi-Page TIFF.</summary>
    /// <param name="HTTPServer" type="string"> the name of the HTTP server.</param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp".</param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadAllThroughPostAsPDF = function(HTTPServer, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads all images in the buffer to the HTTP server through HTTP Post method as a Multi-Page PDF.</summary>
    /// <param name="HTTPServer" type="string"> the name of the HTTP server.</param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp".</param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPostAsMultiPagePDF = function(HTTPServer, ActionPage, fileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Uploads the selected images in the buffer to the HTTP server through the HTTP Post method as a Multi-Page PDF.</summary>
    /// <param name="HTTPServer" type="string"> the name of the HTTP server.</param>
    /// <param name="ActionPage" type="string">the specified page for posting image files. This is the relative path of the page, not the absolute path. For example: "upload.asp", not "http://www.webserver.com/upload.asp".</param>
    /// <param name="fileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnHttpUploadSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnHttpUploadFailure.</param>
    /// <returns type="bool"/>
};


Dynamsoft.WebTwain.prototype.HTTPUploadThroughPutDirectly = function(HTTPServer, localFile, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Directly uploads a specific local file to the HTTP server through the HTTP PUT method without loading it into Dynamic Web TWAIN.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="localFile" type="string">specifies the path of a local file. </param>
    /// <param name="RemoteFileName" type="string">the name of the file to be created on the HTTP server. It should a relative path on the web server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPut = function(HTTPServer, sImageIndex, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads the image of a specified index in the buffer to the HTTP server through the HTTP PUT method.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <param name="RemoteFileName" type="string">the name of the image to be created on the HTTP server. It should a relative path on the web server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPutEx = function(HTTPServer, sImageIndex, RemoteFileName, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads the image of a specified index in the buffer to the HTTP server as a specified image format through the HTTP PUT method.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <param name="RemoteFileName" type="string">the name of the file to be created on the HTTP server. It should a relative path on the web server.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be created on the HTTP server.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadAllThroughPutAsMultiPageTIFF = function(HTTPServer, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads all images in the buffer to the HTTP server through the HTTP Put method as a Multi-Page TIFF.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="RemoteFileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPutAsMultiPageTIFF = function(HTTPServer, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads the selected images in the buffer to the HTTP server through the HTTP Put method as a Multi-Page TIFF.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="RemoteFileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadAllThroughPutAsPDF = function(HTTPServer, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads all images in the buffer to the HTTP server through the HTTP Put method as a Multi-Page PDF.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="RemoteFileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.HTTPUploadThroughPutAsMultiPagePDF = function(HTTPServer, RemoteFileName, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>[Deprecated.] Uploads the selected images in the buffer to the HTTP server through the HTTP Put method as a Multi-Page PDF.</summary>
    /// <param name="HTTPServer" type="string">the name of the HTTP server.</param>
    /// <param name="RemoteFileName" type="string">the name of the image to be uploaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SetUploadSegment = function (segmentUploadThreshold, moduleSize){
	/// <summary>Configures how segmented upload is done.</summary>
    /// <param name="segmentUploadThreshold" type="int">specifies the threshold (in MB) over which segmented upload will be invoked.</param>
	/// <param name="moduleSize" type="int">specifies the size of each segment (in KB).</param>
    /// <returns type="bool"/>
	
};

Dynamsoft.WebTwain.prototype.HTTPUpload = function (url, indices, enumImageType, dataFormat, asyncSuccessFunc, asyncFailureFunc){
	/// <summary>Uploads the images specified by the indices to the HTTP server.</summary>
    /// <param name="url" type="string">The url where the images are sent in a POST request.</param>
	/// <param name="indices" type="Array">Indices specifies which images are to be uploaded.</param>
	/// <param name="enumImageType" type="EnumDWT_ImageType">The image format in which the images are to be uploaded.</param>
	/// <param name="dataFormat" type="EnumDWT_UploadDataFormat">Whether to upload the images as binary or a base64-based string.</param>
    /// <param name="asyncSuccessFunc" type="function">The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="asyncFailureFunc" type="function">The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
	
};
	
Dynamsoft.WebTwain.prototype.LoadDibFromClipboard = function(optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Loads a DIB format image from Clipboard into the Dynamic Web TWAIN.</summary>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the loading succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the loading fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.LoadImage = function(localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Loads an image into the Dynamic Web TWAIN.</summary>
    /// <param name="localFile" type="string">the name of the image to be loaded. It should be the absolute path of the image file on the local disk.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the loading succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the loading fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.LoadImageEx = function(localFile, lImageType, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Loads an image into the Dynamic Web TWAIN.</summary>
    /// <param name="localFile" type="string">the name of the image to be loaded. It should be the absolute path of the image file on the local disk.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">the image format of the file to be loaded.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the loading succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the loading fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.LoadImageFromBase64Binary = function(bry, lImageType) {
    /// <summary>Loads image from a base64 byte array with the specified file format.</summary>
    /// <param name="bry" type="string">specifies the base64 string data.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">specifies the file format.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.LoadImageFromBytes = function(lBufferSize, buffer, lImageType) {
    /// <summary>[Deprecated.] Loads image from a byte array with the specified file format.</summary>
    /// <param name="lBufferSize" type="int">Specifies the buffer size.</param>
    /// <param name="buffer" type="Array">A byte array of the image data.</param>
    /// <param name="lImageType" type="EnumDWT_ImageType">Specifies the file format.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAllAsMultiPageTIFF = function(localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Saves all images in buffer as a MultiPage TIFF file.</summary>
    /// <param name="localFile" type="string">the name of the MultiPage TIFF file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the saving succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the saving fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAllAsPDF = function(localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Saves all images in buffer as a Multi-Page PDF file.</summary>
    /// <param name="localFile" type="string">the name of the Multi-Page PDF file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the saving succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the saving fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAsBMP = function(localFile, sImageIndex) {
    /// <summary>Saves the image of a specified index in buffer as a BMP file.</summary>
    /// <param name="localFile" type="string">the name of the BMP file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAsJPEG = function(localFile, sImageIndex) {
    /// <summary>Saves the image of a specified index in buffer as a JPEG file.</summary>
    /// <param name="localFile" type="string">the name of the JPEG file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAsPDF = function(localFile, sImageIndex) {
    /// <summary>Saves the image of a specified index in buffer as a PDF file.</summary>
    /// <param name="localFile" type="string">the name of the JPEG file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAsPNG = function(localFile, sImageIndex) {
    /// <summary>Saves the image of a specified index in buffer as a PNG file.</summary>
    /// <param name="localFile" type="string">the name of the JPEG file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveAsTIFF = function(localFile, sImageIndex) {
    /// <summary>Saves the image of a specified index in buffer as a TIFF file.</summary>
    /// <param name="localFile" type="string">the name of the JPEG file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based. </param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveSelectedImagesAsMultiPagePDF = function(localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Saves the selected images in buffer as a Multipage PDF file.</summary>
    /// <param name="localFile" type="string"> the name of the MultiPage PDF file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the saving succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the saving fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveSelectedImagesAsMultiPageTIFF = function(localFile, optionalAsyncSuccessFunc, optionalAsyncFailureFunc) {
    /// <summary>Saves the selected images in buffer as a Multipage TIFF file.</summary>
    /// <param name="localFile" type="string"> the name of the MultiPage TIFF file to be saved. It should be an absolute path on the local disk.</param>
    /// <param name="optionalAsyncSuccessFunc" type="function" optional ="true">optional. The function to call when the saving succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="optionalAsyncFailureFunc" type="function" optional ="true">optional. The function to call when the saving fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SaveSelectedImagesToBase64Binary = function() {
    /// <summary>Saves the selected images in buffer to base64 string.</summary>
    /// <returns type="string"/>
};

Dynamsoft.WebTwain.prototype.SaveSelectedImagesToBytes = function(bufferSize, buffer) {
    /// <summary>[Deprecated.] Saves the selected images in buffer to a byte array in the specified file format.</summary>
    /// <param name="bufferSize" type="int">specified the buffer size.</param>
    /// <param name="buffer" type="Array">A byte array of the image data.</param>
    /// <returns type="int"/>
};

Dynamsoft.WebTwain.prototype.SetCookie = function(cookie) {
    /// <summary>[Deprecated.] Sets current cookie into the Http Header to be used when uploading scanned images through POST.</summary>
    /// <param name="cookie" type="string"> the cookie on current page.</param>
    /// <returns type="void" />
};

Dynamsoft.WebTwain.prototype.SetHTTPFormField = function(FieldName, FieldValue) {
    /// <summary>Sets a text parameter as a filed in a web form. This form is maintained by the component itself (meaning it's not on the page). All fields in this form will be passed to the server when uploading images.</summary>
    /// <param name="FieldName" type="string">specifies the name of a text field in web form. </param>
    /// <param name="FieldValue" type="string">specifies the value of a text field in web form.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.SetTiffCustomTag = function(tag, content, base64Str) {
    /// <summary>Sets a custom tiff tag. Currently you can set up to 32 tags. The string to be set in a tag can be encoded with base64.</summary>
    /// <param name="tag" type="int">specifies the tag identifier. The value should be between 600 and 700.</param>
    /// <param name="content" type="string">the string to be set for this tag. The string will be written to the .tiff file when you save/upload it. If the string is base64 encoded, we'll decode it before writing it.</param>
    /// <param name="base64Str", type="bool">if you'd like to encode the string with base64, set this to true. Otherwise, the string will be plin text.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.ShowFileDialog = function(SaveDialog, Filter, FilterIndex, DefExtension, InitialDir, AllowMultiSelect, OverwritePrompt, Flags) {
    /// <summary>Show save file dialog or show open file dialog.</summary>
    /// <param name="SaveDialog" type="bool">True -- show save file dialog, False -- show open file dialog.</param>
    /// <param name="Filter" type="string">The filter name specifies the filter pattern (for example, "*.TXT"). To specify multiple filter patterns for a single display string, use a semicolon to separate the patterns (for example, "*.TXT;*.DOC;*.BAK"). A pattern string can be a combination of valid file name characters and the asterisk (*) wildcard character. Do not include spaces in the pattern string. To retrieve a shortcut's target without filtering, use the string "All Files\0*.*\0\0", but the program will replace  "\0" with "|" automatically.</param>
    /// <param name="FilterIndex" type="int">The index of the currently selected filter in the File Types control. The buffer pointed to by Filter contains pairs of strings that define the filters. The index is 0-based.</param>
    /// <param name="DefExtension" type="string">Define the default extension. GetOpenFileName and GetSaveFileName append this extension to the file name only if the user fails to type an extension. If this member is NULL and the user fails to type an extension, no extension is appended.</param>
    /// <param name="InitialDir" type="string">The initial directory. The algorithm for selecting the initial directory varies on different platforms.</param>
    /// <param name="AllowMultiSelect" type="bool">True -- allows users to select more than one file, False -- only allows to select one file.</param>
    /// <param name="OverwritePrompt" type="bool">True -- If a file already exists with the same name, the old file will be simply overwritten, False -- not allows to save and overwrite a same name file.</param>
    /// <param name="Flags" type="int">If this parameter equals 0, the program will be initiated with the default flags, otherwise initiated with the cumstom value and paramters "AllowMultiSelect" and "OverwritePrompt" will be useless.</param>
    /// <returns type="bool"/>
};

Dynamsoft.WebTwain.prototype.CapGet = function() {
    /// <summary>
    /// Gets information of the capability specified by the Capability property.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetCurrent = function() {
    /// <summary>
    /// Returns the Source's current Value for the specified capability. 
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetDefault = function() {
    /// <summary>
    /// Returns the Source's Default Value for the specified capability. This is the Source's preferred default value.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetFrameBottom = function(index) {
    /// <summary>
    /// Returns the value of the bottom-most edge of the specified frame.
    /// </summary>
    /// <param name="index" type="short">specifies the value of which frame to get. The index is 0-based.</param>
    /// <returns type="float"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetFrameLeft = function(index) {
    /// <summary>
    /// Returns the value (in Unit) of the left-most edge of the specified frame.
    /// </summary>
    /// <param name="index" type="short">specifies the value of which frame to get. The index is 0-based.</param>
    /// <returns type="float"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetFrameRight = function(index) {
    /// <summary>
    /// Returns the value (in Unit) of the left-most edge of the specified frame.
    /// </summary>
    /// <param name="index" type="short">specifies the value of which frame to get. The index is 0-based.</param>
    /// <returns type="float"></returns>
};

Dynamsoft.WebTwain.prototype.CapGetFrameTop = function(index) {
    /// <summary>
    /// Returns the value (in Unit) of the top-most edge of the specified frame.
    /// </summary>
    /// <param name="index" type="short">specifies the value of which frame to get. The index is 0-based.</param>
    /// <returns type="float"></returns>
};

Dynamsoft.WebTwain.prototype.CapIfSupported = function(messageType) {
    /// <summary>
    /// Queries whether the Source supports a particular operation on the capability.
    /// </summary>
    /// <param name="messageType" type="EnumDWT_MessageType">specifies the type of capability operation.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapReset = function() {
    /// <summary>
    /// Changes the Current Value of the capability specified by Capability property back to its power-on value.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapSet = function() {
    /// <summary>
    /// Sets the current capability using the container type specified by CapType property. The current capability is specified by Capability property.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CapSetFrame = function(index, left, top, right, bottom) {
    /// <summary>
    /// Sets the values of the specified frame.
    /// </summary>
    /// <param name="index" type="short"> specifies the values of which frame to set. The index is 0-based.</param>
    /// <param name="left" type="float">the value (in Unit) of the left-most edge of the specified frame.</param>
    /// <param name="top" type="float">the value (in Unit) of the top-most edge of the specified frame.</param>
    /// <param name="right" type="float"> the value (in Unit) of the right-most edge of the specified frame.</param>
    /// <param name="bottom" type="float"> the value (in Unit) of the bottom-most edge of the specified frame.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.GetCapItems = function(index) {
    /// <summary>
    /// Get the cap item value of the capability specified by Capability property, when the value of the CapType property is TWON_ARRAY or TWON_ENUMERATION.
    /// </summary>
    /// <param name="index" type="int">Index is 0-based. It is the index of the cap item.</param>
    /// <returns type="double"></returns>
};

Dynamsoft.WebTwain.prototype.GetCapItemsString = function(index) {
    /// <summary>
    /// Returns the cap item value of the capability specified by Capability property, when the value of the CapType property is TWON_ARRAY or TWON_ENUMERATION.
    /// </summary>
    /// <param name="index" type="int">Index is 0-based. It is the index of the cap item.</param>
    /// <returns type="string"></returns>
};

Dynamsoft.WebTwain.prototype.SetCapItems = function(index, newVal) {
    /// <summary>
    /// Set the value of the specified cap item.
    /// </summary>
    /// <param name="index" type="int">Index is 0-based. It is the index of the cap item.</param>
    /// <param name="newVal" type="double">The Double type of CapItems property is used to present Double, Single(float), Long, int and even boolean types. For string type, please use CapItemsstring property.</param>
    /// <returns type="void"></returns>
};

Dynamsoft.WebTwain.prototype.SetCapItemsString = function(index, newVal) {
    /// <summary>
    /// Set the cap item value of the capability specified by Capability property, when the value of the CapType property is TWON_ARRAY or TWON_ENUMERATION.
    /// </summary>
    /// <param name="index" type="int">Index is 0-based. It is the index of the cap item.</param>
    /// <param name="newVal" type="string">The new value to be set.</param>
    /// <returns type="void"></returns>
};
// --- SCAN end --







// --- View & Edit start --

Dynamsoft.WebTwain.prototype.AddText = function(sImageIndex, x, y, text, txtColor, backgroundColor, backgroundRoundRadius, backgroundOpacity) {
    /// <summary>
    /// Add text on an image.
    /// </summary>
    /// <param name="sImageIndex" type="short"> the index of the image that you want to add text to.</param>
    /// <param name="x" type="int">the x coordinate for the text.</param>
    /// <param name="y" type="int">the y coordinate for the text.</param>
    /// <param name="text" type="string">the content of the text that you want to add.</param>
    /// <param name="txtColor" type="int"> the color for the text.</param>
    /// <param name="backgroundColor" type="int"> the background color.</param>
    /// <param name="backgroundRoundRadius" type="float">ranging from 0 to 0.5. Please NOTE that MAC version does not support this parameter.</param>
    /// <param name="backgroundOpacity" type="float">specifies the opacity of the background of the added text, it ranges from 0 to 1.0. Please NOTE that Mac version only supports value 0 and 1</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CreateTextFont = function(height, width, escapement, orientation, weight, italic, underline, strikeOut, charSet, outputPrecision, clipPrecision, quality, pitchAndFamily, faceName) {
    /// <summary>
    /// Create the font for adding text using the method AddText.
    /// </summary>
    /// <param name="height" type="int">
    /// Specifies the desired height (in logical units) of the font.
    /// The absolute value of nHeight must not exceed 16,384 device units after it is converted.
    /// For all height comparisons, the font mapper looks for the largest font that 
    /// does not exceed the requested size or the smallest font if all the fonts exceed the requested size.
    /// </param>
    /// <param name="width" type="int">
    /// Specifies the average width (in logical units) of characters in the font. 
    /// If Width is 0, the aspect ratio of the device will be matched against the digitization 
    /// aspect ratio of the available fonts to find the closest match, which is determined by the absolute 
    /// value of the difference.
    /// </param>
    /// <param name="escapement" type="int">
    /// Specifies the angle (in 0.1-degree units) between the escapement vector and 
    /// the x-axis of the display surface. The escapement vector is the line through the origins 
    /// of the first and last characters on a line. The angle is measured counterclockwise from the x-axis.
    /// </param>
    /// <param name="orientation" type="int">
    /// Specifies the angle (in 0.1-degree units) between the baseline of a character and the x-axis.
    /// The angle is measured counterclockwise from the x-axis for coordinate systems in which the y-direction 
    /// is down and clockwise from the x-axis for coordinate systems in which the y-direction is up.
    /// </param>
    /// <param name="weight" type="int"> 
    /// Specifies the font weight (in inked pixels per 1000). The described values
    /// are approximate; the actual appearance depends on the typeface. Some fonts have
    /// only FW_NORMAL, FW_REGULAR, and FW_BOLD weights. If FW_DONTCARE is specified, a default weight is used.
    /// </param>
    /// <param name="italic" type="short"> Specifies an italic font if set to TRUE.</param>
    /// <param name="underline" type="short">Specifies an underlined font if set to TRUE.</param>
    /// <param name="strikeOut" type="short">A strikeout font if set to TRUE.</param>
    /// <param name="charSet" type="short">
    /// Specifies the font's character set. The OEM character set is system-dependent. Fonts with other character sets may exist in the system. 
    /// An application that uses a font with an unknown character set must not attempt to translate or interpret strings that are to be rendered with that font. 
    /// </param>
    /// <param name="outputPrecision" type="short">
    /// Specifies the desired output precision. The output precision defines how closely the output must match the requested font's 
    /// height, width, character orientation, escapement, and pitch.
    /// </param>
    /// <param name="clipPrecision" type="short">
    /// Specifies the desired clipping precision. The clipping precision defines how to clip characters that are partially outside the clipping region. 
    /// </param>
    /// <param name="quality" type="short">
    ///Specifies the font's output quality, which defines how carefully the GDI must attempt to match the logical-font attributes to those of an actual physical font.
    /// </param>
    /// <param name="pitchAndFamily" type="short"> The pitch and family of the font.</param>
    /// <param name="faceName" type="string">  the typeface name, the length of this string must not exceed 32 characters, including the terminating null character.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CopyToClipboard = function(sImageIndex) {
    /// <summary>
    /// Copies the image of a specified index in buffer to clipboard in DIB format.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.Erase = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Clears the specified area of a specified image, and fill the area with the fill color.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageBitDepth = function(sImageIndex) {
    /// <summary>
    /// Returns the pixel bit depth of the selected image.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image. The index is 0-based.</param>
    /// <returns type="short"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageWidth = function(sImageIndex) {
    /// <summary>
    /// Returns the width (pixels) of the selected image. This is a read-only property.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image. The index is 0-based.</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageHeight = function(sImageIndex) {
    /// <summary>
    /// Returns the height (pixels) of the selected image. This is a read-only property.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image. The index is 0-based.</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageSize = function(sImageIndex, iWidth, iHeight) {
    /// <summary>
    /// Returns the file size of the new image resized from the image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="iWidth" type="int">specifies the pixel width of the new image.</param>
    /// <param name="iHeight" type="int">specifies the pixel height of the new image.</param>
    /// <returns type="double"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageSizeWithSpecifiedType = function(sImageIndex, sImageType) {
    /// <summary>
    /// Pre-calculate the file size of the local image file that is saved from an image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="sImageType" type="short ">specifies the type of an image file..</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageXResolution = function(sImageIndex) {
    /// <summary>
    /// Return the horizontal resolution of the specified image.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetImageYResolution = function(sImageIndex) {
    /// <summary>
    /// Return the vertical resolution of the specified image.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetSelectedImageIndex = function(sSelectedIndex) {
    /// <summary>
    /// Returns the index of the selected image.
    /// </summary>
    /// <param name="sSelectedIndex" type="short">specifies the index of the selected image.</param>
    /// <returns type="short"></returns>
};


Dynamsoft.WebTwain.prototype.SetSelectedImageIndex = function(selectedIndex, newVal) {
    /// <summary>
    /// You can use the method to select images programatically which is ususally done by mouse clicking.
    /// </summary>
    /// <param name="sSelectedIndex" type="short">this is the index of an array that holds the indices of selected images.</param>
    /// <param name="newVal" type="short">specifies the index of an image that you want to select.</param>
    /// <returns type="void"></returns>
};

Dynamsoft.WebTwain.prototype.GetSelectedImagesSize = function(iImageType) {
    /// <summary>
    /// Pre-calculate the file size of the local image file that is saved from the selected images in buffer.
    /// </summary>
    /// <param name="iImageType" type="int">specifies the type of an image file.</param>
    /// <returns type="int"></returns>
};

Dynamsoft.WebTwain.prototype.GetSkewAngle = function(sImageIndex) {
    /// <summary>
    /// Check the skew angle of an image by its index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">the index of the image in the buffer.</param>
    /// <returns type="double"></returns>
};

Dynamsoft.WebTwain.prototype.GetSkewAngleEx = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Check the skew angle of a rectangular part of an image by its index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">the index of the image in the buffer.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <returns type="double"></returns>
};

Dynamsoft.WebTwain.prototype.IsBlankImageEx = function(sImageIndex, left, top, right, bottom, bFuzzyMatch) {
    /// <summary>
    /// [Deprecated.] Detects whether a certain area on an image is blank.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bFuzzyMatch" type="bool">specifies whether use fuzzy matching when detecting.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.Mirror = function(sImageIndex) {
    /// <summary>
    /// Mirrors the image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.OverlayRectangle = function(sImageIndex, left, top, right, bottom, color, fOpacity) {
    /// <summary>
    /// Decorates image of a specified index in buffer with rectangles of transparent color.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="color" type="int">Specifies the fill color of the rectangle. The byte-ordering of the RGB value is 0xBBGGRR. BB represents blue, GG represents green, RR represents red.</param>
    /// <param name="fOpacity" type="float">Specifies the opacity of the rectangle. The value represents opacity. 1.0 is 100% opaque and 0.0 is totally transparent.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RemoveAllImages = function() {
    /// <summary>
    /// Removes all images in buffer.
    /// </summary>
    /// <returns type="void"></returns>
};

Dynamsoft.WebTwain.prototype.RemoveAllSelectedImages = function() {
    /// <summary>
    /// Removes selected images in buffer.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RemoveImage = function(sImageIndexToBeDeleted) {
    /// <summary>
    /// Removes the image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndexToBeDeleted" type="short"> specifies the index of the image to be deleted  in buffer. The index is 0-based. </param>
    /// <returns type="bool"></returns>
};

// Image Operate
Dynamsoft.WebTwain.prototype.Rotate = function(sImageIndex, fAngle, bKeepSize) {
    /// <summary>
    /// Rotates the image of a specified index in buffer by specified angle.
    /// </summary>
    /// <param name="sImageIndex" type="short"> specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="fAngle" type="float"> Specifies the rotation angle.</param>
    /// <param name="bKeepSize" type="bool">Keep size or not.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RotateEx = function(sImageIndex, fAngle, bKeepSize, newVal) {
    /// <summary>
    /// Rotates the image of a specified index in buffer by specified angle.
    /// </summary>
    /// <param name="sImageIndex" type="short"> specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="fAngle" type="float"> Specifies the rotation angle.</param>
    /// <param name="bKeepSize" type="bool">Keep size or not.</param>
    /// <param name="newVal" type="EnumDWT_InterpolationMethod">specifies the method to do interpolation.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RotateLeft = function(sImageIndex) {
    /// <summary>
    /// Rotates the image of a specified index in buffer by 90 degrees counter-clockwise.
    /// </summary>
    /// <param name="sImageIndex" type="short"> specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.RotateRight = function(sImageIndex) {
    /// <summary>
    /// Rotates the image of a specified index in buffer by 90 degrees clockwise.
    /// </summary>
    /// <param name="sImageIndex" type="short"> specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ChangeImageSize = function(sImageIndex, iNewWidth, iNewHeight, newVal) {
    /// <summary>
    /// Changes width and height of the image of a specified index in the buffer. Please note the file size of the image will be changed proportionately.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="iNewWidth" type="int"> specifies the pixel width of the new image.</param>
    /// <param name="iNewHeight" type="int">specifies the pixel height of the new image.</param>
    /// <param name="newVal" type="EnumDWT_InterpolationMethod">specifies the method to do interpolation.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.Flip = function(sImageIndex) {
    /// <summary>
    /// Flips the image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.Crop = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Crops the image of a specified index in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CropToClipboard = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Crops the image of a specified index in buffer to clipboard in DIB format.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CutFrameToClipboard = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Cuts the image data in the specified area to the system clipboard in DIB format.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">specifies the x-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="top" type="int">specifies the y-coordinate of the upper-left corner of the rectangle.</param>
    /// <param name="right" type="int">specifies the x-coordinate of the lower-right corner of the rectangle.</param>
    /// <param name="bottom" type="int">specifies the y-coordinate of the lower-right corner of the rectangle.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.CutToClipboard = function(sImageIndex) {
    /// <summary>
    /// Cuts the image of a specified index in buffer to clipboard in DIB format.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetDPI = function(sImageIndex, xResolution, yResolution, bResampleImage, newVal) {
    /// <summary>
    /// Change the DPI (dots per inch) for the specified image.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="xResolution" type="int">The horizontal resolution.</param>
    /// <param name="yResolution" type="int">The vertical resolution.</param>
    /// <param name="bResampleImage" type="bool">Whether to resample the image. (The image size will be changed if this is set to true).</param>
    /// <param name="newVal" type="EnumDWT_InterpolationMethod">specifies the method to do interpolation.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetViewMode = function(sHorizontalImageCount, sVerticalImageCount) {
    /// <summary>
    /// Sets the view mode that images are displayed in Dynamic Web TWAIN. You can use this method to display multiple images in Dynamic Web TWAIN.
    /// </summary>
    /// <param name="sHorizontalImageCount" type="short"> specifies how many columns can be displayed in Dynamic Web TWAIN. </param>
    /// <param name="sVerticalImageCount" type="short">specifies how many rows can be displayed in Dynamic Web TWAIN..</param>
    /// <returns type="void"></returns>
};

Dynamsoft.WebTwain.prototype.MoveImage = function(sSourceImageIndex, sTargetImageIndex) {
    /// <summary>
    /// Moves a specified image.
    /// </summary>
    /// <param name="sSourceImageIndex" type="short">Specifies the source index of image in buffer. The index is 0-based.</param>
    /// <param name="sTargetImageIndex" type="short">Specifies the target index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SwitchImage = function(sImageIndex1, sImageIndex2) {
    /// <summary>
    /// Switchs two images of specified indices in buffer.
    /// </summary>
    /// <param name="sImageIndex1" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="sImageIndex2" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.Print = function() {
    /// <summary>
    /// Shows the GUI of Image Printer.
    /// </summary>
    /// <returns type="bool"></returns>
};
// --- View & Edit end --



// --- Upload & Save  end --

// --- Others ---
Dynamsoft.WebTwain.prototype.ShowImageEditor = function() {
    /// <summary>
    /// Shows the GUI of Image Editor.
    /// </summary>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.UnregisterEvent = function(name, evt) {
    /// <summary>
    /// Unbinds an event from the specified function, so that the function stops receiving notifications when the event fires.
    /// </summary>
    /// <param name="name" type="string">the name of the event.</param>
    /// <param name="evt" type="object">specified the function to be unbound.</param>
    /// <returns type="bool"></returns>
};
// --- Others end ---

Dynamsoft.WebTwain.prototype.EnableSource = function() {
    /// <summary>Enables the source to accept image.</summary>
    /// <returns type="bool"></returns>
};



Dynamsoft.WebTwain.prototype.AcquireImage = function() {
    /// <summary>Displays the source's built-in interface to acquire image.</summary>
    /// <returns type="bool"></returns>
};

// start from 10.0 
Dynamsoft.WebTwain.prototype.SetImageWidth = function(sImageIndex, iNewWidth) {
    /// <summary>
    /// Change the width of an image in buffer.
    /// </summary>
    /// <param name="sImageIndex" type="short"> specifies which image you'd like to change.</param>
    /// <param name="iNewWidth" type="int">specifies how wide you'd like to change the image.</param>
    /// <returns type="bool"></returns>
};

//  Set custom DS data (DAT_CUSTOMDSDATA), the input string is encoded with base64
Dynamsoft.WebTwain.prototype.SetCustomDSDataEx = function(value) {
    /// <summary>
    /// Sets custom DS data to be used for scanning, the input string is encoded with base64. Custom DS data means a specific scanning profile.
    /// </summary>
    /// <param name="value" type="string">the input string which is encoded with base64.</param>
    /// <returns type="bool"></returns>
};

//  Set custom DS data, load data from the specified file
Dynamsoft.WebTwain.prototype.SetCustomDSData = function(fileName) {
    /// <summary>
    /// Sets custom DS data to be used for scanning, the data is stored in a file. Custom DS data means a specific scanning profile.
    /// </summary>
    /// <param name="fileName" type="string">the absolute path of the file where the custom data source data is stored.</param>
    /// <returns type="bool"></returns>
};

// Get custom DS data, and returned string  is encoded with base64
Dynamsoft.WebTwain.prototype.GetCustomDSDataEx = function() {
    /// <summary>
    /// Gets custom DS data, the returned string is base64 encoded.
    /// </summary>
    /// <returns type="string">the base64 encoded string which represents the custom DS data.</returns>
};

// Get custom DS data, and save the data to the specified file
Dynamsoft.WebTwain.prototype.GetCustomDSData = function(fileName) {
    /// <summary>
    /// Gets custom DS data and save the data in a specified file.
    /// </summary>
    /// <param name="fileName" type="string"> the path of the file used for storing custom DS data.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ChangeBitDepth = function(sImageIndex, sBitDepth, bHighQuality) {
    /// <summary>
    /// Changes the bitdepth of a specified image.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="sBitDepth" type="short">specifies the target bit depth.</param>
    /// <param name="bHighQuality" type="bool">specifies whether or not to keep high quality while changing the bit depth. When it's true, it takes more time.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ConvertToGrayScale = function(sIndex) {
    /// <summary>
    /// Changes a specified image to gray scale.
    /// </summary>
    /// <param name="sIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ShowImageEditorEx = function(x, y, cx, cy, nCmdShow) {
    /// <summary>
    /// [Deprecated.] Shows the GUI of Image Editor with custom settings.
    /// </summary>
    /// <param name="x" type="int">specifies the new position of the left top corner of the window.</param>
    /// <param name="y" type="int">specifies the new position of the left top corner of the window.</param>
    /// <param name="cx" type="int">specifies the width of the window.</param>
    /// <param name="cy" type="int">specifies the height of the window.</param>
    /// <param name="nCmdShow" type="int">specifices how the window should be shown.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.IsBlankImage = function(sImageIndex) {
    /// <summary>
    /// [Deprecated.] Detects whether an image is blank.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.IsBlankImageExpress = function(sImageIndex) {
    /// <summary>
    /// Detects whether a specific image is blank.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of image in buffer. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.GetBarcodeInfo = function(barcodeInfoType, barcodeIndex) {
    /// <summary>
    /// [Deprecated.] Detects whether a specific image is blank.
    /// </summary>
    /// <param name="barcodeInfoType" type="int">Defined in TWAIN Specification.</param>
    /// <param name="barcodeIndex" type="int">Specifies which barcode to check. The index is 0-based.</param>
    /// <returns type="object"></returns>
};

Dynamsoft.WebTwain.prototype.GetBarcodeText = function(barcodeIndex) {
    /// <summary>
    /// [Deprecated.] Gets the content from a specified barcode.
    /// </summary>
    /// <param name="barcodeIndex" type="int">Specifies which barcode to check. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetDefaultSource = function(sImageIndex) {
    /// <summary>
    /// Sets the default source to use. It's only valid when IfUseTWAINDSM is set to true.
    /// </summary>
    /// <param name="sImageIndex" type="short">specifies the index of the default source. The index is 0-based.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.SetSelectedImageArea = function(sImageIndex, left, top, right, bottom) {
    /// <summary>
    /// Draws a rectangle on the viewer which represents the selected area.
    /// </summary>
    /// <param name="sImageIndex" type="short">Specifies the index of image in buffer. The index is 0-based.</param>
    /// <param name="left" type="int">The X axis of the left border.</param>
    /// <param name="top" type="int">The Y axis of the top border.</param>
    /// <param name="right" type="int">The X axis of the right border.</param>
    /// <param name="bottom" type="int">The Y axis of the bottom border.</param>
    /// <returns type="bool"></returns>
};

Dynamsoft.WebTwain.prototype.ConvertToBase64 = function (indices, enumImageType, asyncSuccessFunc, asyncFailureFunc){
	/// <summary>Converts the images specified by the indices to base64.</summary>
    /// <param name="indices" type="Array">Indices specifies which images are to be converted to base64.</param>
	/// <param name="enumImageType" type="EnumDWT_ImageType">The image format in which the images are to be converted to base64.</param>
	/// <param name="asyncSuccessFunc" type="function">The function to call when the upload succeeds. Please refer to the function prototype OnSuccess.</param>
    /// <param name="asyncFailureFunc" type="function">The function to call when the upload fails. Please refer to the function prototype OnFailure.</param>
    /// <returns type="bool"/>
};


Dynamsoft.WebTwain.prototype.GetImageURL = function (index, iWidth, iHeight){
	/// <summary>Returns the direct URL of an image specified by index, if iWidth or iHeight is set to -1, you get the original image, otherwise you get the image with specified iWidth or iHeight while keeping the same aspect ratio.</summary>
	/// <param name="index" type="short">The index of the image.</param>
	/// <param name="iWidth" type="int">The width of the image.</param>
	/// <param name="iHeight" type="int">The height of the image.</param>
	/// <returns type="string"/>
};

Dynamsoft.WebTwain.prototype.SetHTTPHeader = function (key, value){
	/// <summary>Sets a header for the current HTTP Post request.</summary>
	/// <param name="key" type="string">The key of the header.</param>
	/// <param name="value" type="string">The value of the header.</param>
	/// <returns type="bool"/>
};


/**
 * @namespace WebTwainEnv
 */
Dynamsoft.WebTwainEnv = function () {
};

Dynamsoft.WebTwainEnv.GetWebTwain = function (cid) {
    /// <summary>
    /// Return an WebTWAIN object with the specified container id.
    /// </summary>
    /// <param name="cid" type="string">Specifies the Dynamic Web TWAIN container div id.</param>
    /// <returns type="Dynamsoft.WebTwain"></returns>
    return new Dynamsoft.WebTwain(cid);
};

var DWObject = Dynamsoft.WebTwainEnv.GetWebTwain();