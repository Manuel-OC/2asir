from operator import itemgetter, attrgetter

def BuscarSalto(f,c,m):
	distancias = [
	    [0,f-1,c-1],
	    [0,f-1,c],
	    [0,f-1,c+1],
	    [0,f,c-1],
	    [0,f,c+1],
	    [0,f+1,c-1],
	    [0,f+1,c],
	    [0,f+1,c+1],
	]
	actual = [f,c]

	distancias[0][0] = m[f][c] - m[f-1][c-1]
	distancias[1][0] = m[f][c] - m[f-1][c]
	distancias[2][0] = m[f][c] - m[f-1][c+1]
	distancias[3][0] = m[f][c] - m[f][c-1]
	distancias[4][0] = m[f][c] - m[f][c+1]
	distancias[5][0] = m[f][c] - m[f+1][c-1]
	distancias[6][0] = m[f][c] - m[f+1][c]
	distancias[7][0] = m[f][c] - m[f+1][c+1]
	distancias = sorted(distancias , key=itemgetter(0))

	i=0
	while True:
		if m[distancias[i][1]][distancias[i][2]] < m[f][c]:
			actual[0] = distancias[i][1]
			actual[1] = distancias[i][2]
			break
		i+=1

	return actual

def Terminado(f,c,m):
	t = False
	if (f == 0 or c == 0 or f == len(m)-1 or c == len(m[len(m)-1])-1):
		t = True
	return t

def BuscarRuta(montana):
	maxAltura = -999
	actual = [-1,-1]

	for i in range(0,6):
		for j in range(0,6):
			if montana[i][j] > maxAltura:
				maxAltura = montana[i][j]
				f = i
				c = j

	print(f"Inicio -> {f} {c}")
	t = False

	while t == False:
	    r = BuscarSalto(f,c,montana)
	    f = r[0]
	    c = r[1]
	    print(f"Vamos a -> {f} {c}")
	    t = Terminado(f,c,montana)

montana = [
	[100,100,110,130,170,160,100],
	[100,120,160,240,260,280,140],
	[130,210,250,305,306,303,200],
	[140,270,310,340,330,310,250],
	[80,100,210,240,260,280,260],
	[130,200,210,210,205,260,240],
	[90,100,110,130,170,160,100]
]

BuscarRuta(montana)