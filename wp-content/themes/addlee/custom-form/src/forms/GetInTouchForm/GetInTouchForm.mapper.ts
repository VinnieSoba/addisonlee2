import { IGetInTouchForm } from "../../models";
import { IGetInTouchFormDto } from "../../dto";

export class GetInTouchFormMapper {
  static mapModelToDto = (modelData: IGetInTouchForm): IGetInTouchFormDto => {
    return {
      salutation_title: modelData.title,
      first_name: modelData.firstName,
      last_name: modelData.lastName,
      company_name: modelData.companyName,
      business_email: modelData.businessEmail,
      business_telephone: modelData.businessPhoneNumber,
      comments: modelData.comments,
    };
  };

  static mapDtoToModel = (dtoData: IGetInTouchFormDto): IGetInTouchForm => {
    return {
      title: dtoData.salutation_title,
      firstName: dtoData.first_name,
      lastName: dtoData.last_name,
      companyName: dtoData.company_name,
      businessEmail: dtoData.business_email,
      businessPhoneNumber: dtoData.business_telephone,
      comments: dtoData.comments,
    };
  };
}
