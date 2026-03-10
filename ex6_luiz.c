#include <stdio.h>

int main(){
    float sal, salreceber, grat, imp;
 
	printf("Digite o salario do funcionario:");
    scanf("%f", &sal);
    grat = sal * 5/100;
    imp = sal * 7/100;
    salreceber = sal + grat - imp;
    printf("O salario a receber e: %.2f", salreceber);
	return 0;
}