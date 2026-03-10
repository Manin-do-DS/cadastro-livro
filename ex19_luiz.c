#include <stdio.h>

int main(){
    float a_degrau, a_cliente, qtd_degraus;
    printf("Digite a altura dos degraus:");
    scanf("%f", &a_degrau);
    printf("Digite a altura desejada:");
    scanf("%f", &a_cliente);
    
    qtd_degraus = a_cliente/a_degrau;
    printf("A quantidade de degraus necessaria e: %.2f", qtd_degraus);

	return 0;
}