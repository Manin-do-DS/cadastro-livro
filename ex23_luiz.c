#include <stdio.h>
#include <math.h>

int main(){
    float num, f;
    int i, a;
    printf("Digite o numero real:");
    scanf("%f", &num);
    
    printf("Parte Inteira : %d \n",(int) num);
    printf("Parte Decimal : %f\n", num - ((int)num));
    printf("Arredondado : %d", (int)round(num));
    
    
	return 0;
}