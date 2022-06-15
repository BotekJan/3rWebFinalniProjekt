import mwclient
site = mwclient.Site('lol.fandom.com', path='/')


def getTeams():
    return site.api('cargoquery', limit='max', tables="Teams", fields="Name", offset="2000")



for t in getTeams()['cargoquery']:
    print(t['title']['Name'])

def getLeagues():
    return site.api('cargoquery', limit='max', tables="Tournaments", fields="Name", where="Region = 'Europe' AND League != '' AND Year = '2022'")

#for l in getLeagues()['cargoquery']:
    print(l['title']['Name'])

#for t in getTeams()['cargoquery']:
    #print(t['title']['Name'])
    print(site.api('cargoquery', limit='max', tables="TournamentPlayers", fields="League, Link", where="Team = 'Astralis'"))

