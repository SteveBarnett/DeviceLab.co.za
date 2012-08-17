# [Nomad Device Lab](index.md)

[mobile.md](mobile.md) | [testing.md](testing.md) | [benefits.md](benefits.md)

Focus on learning and improvement. Helping devs with overwhelming mobile growth and challenges that brings.

rewrite to focus on benefits of each thing.

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




### Community labs (abroad only at the moment)

* Isn't one here yet.
* Free
* Devices donated, so selection is haphazrd.
* Large number of devices.
* At someone else's office.

### Set up own lab

* Money
	* Purchase and maintainence of devices.
* Time
	* Need to keep on top of stats to keep representative selection.
	* Physical admin: storage, charging, replacing cables, etc.. 

### Use team's own devices

* Device selection
* Availablity
* Privacy - emails, data usage, etc.
* Messing with high scores.


### Remote devices

* Manaufacturers offer some Nokia, Samsung (need dev account)
* Services like Perfecto mobile, DeviceAnywhere. Can get expensive! >=$10 on higher end packages.

### Emulators

* Adobe Shadow - similar to emulator. Only WebKit-based browser. Debugging is great.
* More detail in next section!

## Why test on real devices?

* emulators are good, better than not testing on them at all, but not the same. Ports of OS / browser, so chance of error / difference in performance & behaviourA . Another layer of abstraction from what the experience the user has, and another potential for bugs.
* Actual devices give clearest picture of who site will work "in the wild"
* Use it how your users would.
* speed / performance differences between emulator and devices. devices still relatively low spec compared to desktop hardware.
* Physical characteristics of devices
	* input methods: touch screen fingers (etc) vs mouse pointer
	* weight, size, form factor, portability (and context, screen size, resolution, ppi, quality.
	* capabilities: touch, GPS, accelerometer, etc. (more for web apps than sites)

so, emulators more of a test of UI elements and layout. Not such a good test of UX, interactions.

* learn more each time you use them. become more efficient over time, know what to look out for. gives team new knowledge.
* exposure to more platforms, design approaches, OSes, browsers is good.
* people react better to real world physical and visual stimuli that digital ones.