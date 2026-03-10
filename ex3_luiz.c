#include <stdio.h>
int main (){
	float n1, n2, n3;
	int p1, p2, p3;
	float media;
	
	printf("Digite a 1 nota:");
	scanf("%f", &n1);
	printf("Digite a 2 nota:");
	scanf("%f", &n2);
	printf("Digite a 3 nota:");
	scanf("%f", &n3);
	printf("Digite o peso da primeira nota:");
	scanf("%d", &p1);
	printf("Digite o peso da segunda nota:");
	scanf("%d", &p2);
	printf("Digite o peso da terceira nota:");
	scanf("%d", &p3);
	
	media = (n1*p1+n2*p2+n3*p3)/(p1+p2+p3);
	
	printf("A media e: %.1f", media);
	
	return 0;
}