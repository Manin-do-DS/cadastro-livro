#include <stdio.h>

int main(){
    float pes, polegadas, jardas, milhas;
    printf("Digite a quantidade de pes:");
    scanf("%f", &pes);
    
    polegadas = pes*12;
    jardas = pes/3;
    milhas = jardas/1760;
    
    printf("A medida de pes em polegadas, jardas e milhas e:\n");
    printf("polegadas:%.2f \n", polegadas);
    printf("jardas:%.2f \n", jardas);
    printf("milhas:%.2f \n", milhas);
    
	return 0;
}