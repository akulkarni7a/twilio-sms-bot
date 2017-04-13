import csv
from twilio.rest import TwilioRestClient
from twilio import twiml

def sendmessages(client,phones3final):
	for number in phones3final:
			message = client.messages.create(to=number, from_="+12144915697",
                                     body=
                                     "Thank you for your interest in Carpe Diem! What questions can I help you answer today?")

phones3final = []

account_sid = "#####"
auth_token = "#####"
client = TwilioRestClient(account_sid, auth_token)

with open ('CR.csv', 'rb') as csvfile:
	 phones = csv.reader(csvfile)
	 phoneslist = list(phones)
	 firstcol = [row[0] for row in phoneslist]	
	 secondcol = [row[1] for row in phoneslist]
	 phones3 = secondcol[1] + secondcol[2]
	 phones3cleaned = [x for x in phones3 if x.isdigit() ]
	 phones3cleanedstring = ''.join(phones3cleaned)
	 phones3final = [phones3cleanedstring[i:i+10] for i in range(0, len(phones3cleanedstring), 10)]
	 print phones3final


print phones3final

sendmessages(client, phones3final)



