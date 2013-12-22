p4.christophermorse.org
=======================

final project for DWA15


EGO MATRIX

The Ego Matrix calculator converts your Myers-Briggs type into Jungian Cognitive Processes and provides statistical analyses of the Ego Matrix community.

The Myers-Briggs Type Indicator (MBTI) is a system that uses four letter abbreviations to describe the preference of a person's cognitive functions. See the following links for more information on the MBTI and Jungian Cognitive Functions: 

	http://en.wikipedia.org/wiki/Myers-Briggs_Type_Indicator
	http://www.cognitiveprocesses.com/16Types/16Types.cfm

Furthermore there are various free tests online that can tell you your MBTI type.

This website was designed to convert the MBTI to Jungian Cognitive Functions and to visualize them using color and proportion in order to help us better understand the self, and through the community section of the website, the aggregate. Each user page has its own colored 'badge' that represents the cognitive processes specific to each person in a theoretical proportion of use/level of development based on a user's personality type. For example, if you are an INFP, Fi (Introverted Feeling, colored in yellow) is your dominant function and therefore the largest color proportionally on your badge. Each other color/size represents one of the four cognitive functions that informs each personality type and how strongly it influences your way of thinking.

Although this version of the app is only a prototype, it can be implemented within groups of people, such as family groups, friend groups, working professionals, etc., to see the different personality types that constitute the group. In doing so it is possible to observe the dominant cognitive types that exist in a group or community, and also which types are underrepresented or marginalized. Although users have individual usernames for their own accounts, the community section remains completely private so that users are not obliged to share their personal MBTI.


FEATURES
	Accounts:
		create account, log in, log out

	Content:
		automatically calculates user cognitive processes based on MBTI
		dynamic visualization of cognitive process (badge)
		clickable personal cognitive functions to learn more about each
		community page that dynamically visualizes the percentage of each cognitive function on site
		page that displays all cognitive functions that user can click to learn more


The MySQL database holds all user information including their username, password, MBTI, cognitive processes, and their cookie token.

JavaScript is used in two ways on the website. First, data is fed into a JavaScript library called Raphaël that is then used to draw the user's personal badge. Secondly, JavaScript is used to load each <div> element containing information about each cognitive process.


Thank you for a wonderful semester!
Chris
