# LTI_Jitsi_Plugin
[Mattermost] Hackathon on November, 2020

Installation instructions in Blackboard Learn:

Self-hosted:
1. Download and run jitsi-meet project in Ubuntu/Debian/docker
https://github.com/jitsi/jitsi-meet
2. Replace meet.jit.si in index.php with your own meet.jit.si.school.edu 
3. Follow Cloud-hosted steps by replacing apps.dataii.com with your own meet.jit.si.school.edu

Cloud-hosted:

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
  
  

# How it works

https://www.youtube.com/watch?v=00OYWWmR4Vk
