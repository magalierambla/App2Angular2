import ProjectStatusEnum from "../projectStatus.enum";
import ProjectStatusTypoEnum from "../projectStatusTypo.enum";

/** Retourne le nom du statut avec accent(s)
 * 
 * @param {string} nom Le nom du statut sans accent
 */
export default nom => {

  switch (nom) {

    case ProjectStatusEnum.ATTENTE:

      return ProjectStatusTypoEnum.ATTENTE

    case ProjectStatusEnum.VALIDE:

      return ProjectStatusTypoEnum.VALIDE

    case ProjectStatusEnum.ANNULE:

      return ProjectStatusTypoEnum.ANNULE

    case ProjectStatusEnum.EN_COURS:

      return ProjectStatusTypoEnum.EN_COURS

    case ProjectStatusEnum.RENOUVELE:

      return ProjectStatusTypoEnum.RENOUVELE

    case ProjectStatusEnum.TERMINE:

      return ProjectStatusTypoEnum.TERMINE

    case ProjectStatusEnum.SUSPENDU:

      return ProjectStatusTypoEnum.SUSPENDU
  }
} 