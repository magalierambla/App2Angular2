import fixProjectFormat from './fixProjectFormat'
import projectStatusEnum from '../projectStatus.enum'
import projectStatusTypoEnum from '../projectStatusTypo.enum'

describe(
  '_utils/fixProjectFormat',
  () => {

    Object.entries(projectStatusEnum)
      .map(([ key, value ]) =>
      
        it(
          `Should add accent to ${ key } project status(${ value } => ${ projectStatusTypoEnum[key] }).`,
          () => 
          
            expect(fixProjectFormat(value))
              .toEqual(projectStatusTypoEnum[key])))
  }) 