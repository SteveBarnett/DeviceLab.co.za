# [Nomad Device Lab](index.md)

[home](index.md) | [mobile statistics](mobile-statistics.md) | [testing on mobile](testing-on-mobile.md) | [the lab](the-lab.md)

# The Lab

**Nomad Device Lab** is a traveling, curated, collection of mobile devices that can work with you to do practical and efficient testing.

The focus is on [hands-on testing](#whytestonrealdevices) on a [small number of devices, covering a large range of variables](#deviceselection), and on using that testing to learn and improve your knowledge of the various operating systems and browsers.


## Why test on real devices?

Testing on real devices gives the clearest picture of how the site will work "in the wild." It allows for testing in a way that's closest to how real users will interact with the site. The most important benefits of using real devices are the physical characteristics of devices:

* input methods such as fingers on a touch screen rather (are link targets big enough?);
* the weight, size, form factor, and portability of a device (is the text well-sized with the screen up close?);
* the quality and condition of the hardware (how well does the site work if the touch screen is not very responsive, is cracked, or dirty?);
* capabilities: touch, GPS, accelerometer, etc. (can we use the device's extra capabiliites to add extra value for the user?)

More realistic testing isn't the only benefit of using real devices. You learn more each time you use them, and become more efficient by knowing what to look out for next time. Exposure to more platforms and design approaches, Operating Systems, and browsers is also beneficial. It serves as a reminder of the wide range of use cases and that the site needs to be as lean and robust as possible to survive in whatever environment it is used in.


### Emulators

Testing on emulators can be useful, and is certainly better than not testing for mobile at all, but is not as good as testing on real devices. Emulators are essentially ports of an Operating System / browser, so there is the chance of errors or differences in performance and behaviour. They also add another layer of abstraction from the experience that the user has, and another potential place for bugs to occur. They can be a good first test of layout, but can't replicate a real user experience.


## Device selection

It would be impossible to test your site on every device that exists today, and the range and variation is only increasing. Testing on as many devices as possible can quickly become impractical. A pragmatic approach is to test on a representative sample of devices, covering as broad a range as possible.

The focus of development should be on long term functional support for as many devices as possible, followed by optimisation for higher-end devices. Achieving perfection for specific devices or platforms will only be a short term success: the quantity, quality, and variety of internet-enabled devices is increasing at a remarkble pace.

The devices in the lab are selected using high-level device categories: the specific devices in the lab aren't as important as the categories that each belongs to. Some of the categories used are:

* Operating system and installable browsers
* Screen size, resolution, and ppi
* Inputs method (touchscreen, touchpad, QWERTY keyboard, dpad)
* form factor (shape, size)
* hardware quality
* manufacturer

# Devices in the lab

Below is a list of devices currently in the lab, and a short description of why they're included.

* **Samsung galaxy pocket**. Low end smartphone from leading manufacturer, with most popular Android version (2.3 Gingerbread).
* **BB curve 8520**. Older Blackberry (OS 5) with landscape screen, and touchpad / QWERTY input.
* **Alacatel one touch**. Mid range smartphone with older Android version (2.2 Froyo).
* **iPad 2**. Popular Apple iOS tablet, with large 10" screen and a wide range of available browsers.
* **Amazon Kindle keyboard**. Popular e-reader with low capability browser and 16-level grayscale e-ink display. Oddball!
* **Nokia 5800 XpressMusic**. Mid range Symbian smartphone from manufacturer popular in Africa, with touchscreen
* **iPhone 4**. Popular Apple iOS smartphone, high dpi 3.5" screen and a wide range of available browsers.
* **HcH Generic 7inch Android tablet**. Low end tablet with older Android version and mid-size screen.
* **Nokia 5310 XpressMusic**. Mid range feature phone from manufacturer popular in Africa, on Series 40 OS, dpad and keypad input, running Opera Mini proxy browser.

If you would like to host the lab for a day or half day session, please [get in touch](mailto:nomad@devicelab.co.za?subject=I%20would%20like%20to%20host%20the%20lab%20for%20a%20session).