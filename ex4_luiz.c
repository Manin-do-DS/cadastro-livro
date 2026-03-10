#include <stdio.h>

int main(){
		float sal, novosal;
		
		
		printf("Digite o seu salario para o aumento:");
		scanf("%f", &sal);
		novosal = sal + (sal * 25/100);
		
		printf("Seu novo salario e:%.2f ", novosal);
	
	return 0;
}