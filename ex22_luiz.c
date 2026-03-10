#include <stdio.h>

int main(){
    float vlr_sal, qtd_kw, vlr_kw, vlr_reais, desc, vlr_desc;
    printf("Coloque o valor do salario:");
    scanf("%f", &vlr_sal);
    printf("Coloque a quantidade dos kilowats:");
    scanf("%f", &qtd_kw);
    vlr_kw = vlr_sal / 5;
    vlr_reais = vlr_kw * qtd_kw;
    desc = vlr_reais * 15/100;
    vlr_desc = vlr_reais - desc;
    printf("O valor do kilowats e: %.2f \n", vlr_kw);
    printf("O valor em reais e: %.2f \n", vlr_reais);
    printf("O valor do desconto e: %.2f \n", vlr_desc);

	return 0;
}