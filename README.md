# LTI_Jitsi_Plugin

LTI configuration is LMS specific.  The instructions below show Blackboard Learn and Canvas configuration:

# Installation instructions in Blackboard Learn:

1. In Admin panel, navigate to LTI Integrations  
2. Approve apps.dataii.com as an LTI domain  
3. Create a new placement:  

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name: Jitsi Video Room  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description: Jitsi is a set of open-source projects that allows you to easily build and deploy secure videoconferencing solutions. At the heart of Jitsi are Jitsi Videobridge and Jitsi Meet, which let you have conferences on the internet, while other projects in the community enable other features such as audio, dial-in, recording, and simulcasting  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;handle: jitsi  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: Course Tool + Student  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icon: (download from the project above)  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tool provider url: https://apps.dataii.com/jitsi/  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tool provider key & secret: https://apps.dataii.com/bb/ltitool/register.php  

4. Sample optional configuration for Tool Provider Custom Parameters:
meeturl - alternative server running Jitsi meet
saltenc - encryption salt to make the Jitsi room URL unpredictable even if someone reads this code or documentation
dailyreset - each day room URLs will be different in case they were shared with a larger group of collaborators such as guest speakers

Optional Tool Provider Custom Parameters:

meeturl=meet.systemli.org\
saltenc=asdfasdfasdf\
dailyreset=true

You can host Jitsi on your own servers:
1. Download and run jitsi-meet project in Ubuntu/Debian/docker
https://github.com/jitsi/jitsi-meet
2. Replace meet.jit.si in the LTI placement cutom configuration with your own meeturl=meet.jit.si.school.edu 
3. Follow Cloud-hosted steps by replacing apps.dataii.com with your own meet.jit.si.school.edu


# Installation instructions in Canvas LMS:

1. Use this XML configuration files for LTI 1.3: https://www.eduappcenter.com/configurations/jpzki6053w5k9pue.xml
2. In Settings for account or course, add new app configuration
3. Use name: Jitsi Video Rooms
4. After saving the app configuration use External Tool to place the link in the course.

More about apps configuration in Canvas: https://www.eduappcenter.com/tutorials/canvas
  

# How it works

Video1:
https://www.youtube.com/watch?v=00OYWWmR4Vk
